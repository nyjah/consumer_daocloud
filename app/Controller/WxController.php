<?php

declare(strict_types=1);

namespace App\Controller;

use App\CommonServer\WxServer;
use App\Model\MemberIntegralRule;
use App\Model\Order;
use App\Model\User;
use Hyperf\DbConnection\Db;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\Utils\Context;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use App\Middleware\HeadMiddleware;

/**
 * @AutoController()
 * @Middleware(HeadMiddleware::class)
 */
class WxController extends BaseController
{

    /*
     * private $token
     */

    /**
     * @Inject
     * @var WxServer
     */
    private $wxServer;

    public function __get($name)
    {
        if ($name == 'store_id' || $name == 'authorization' || $name == 'client_type') {
            return Context::get($name);
        }
        return Context::get(__CLASS__ . '_' . $name);
    }

    public function __set($name, $value)
    {
        Context::get(__CLASS__ . '_' . $name, $value);
    }

    public function getAccToken()
    {
        $token = $this->wxServer->getAccessToken((int)$this->store_id);
        if ($token) {
            return $this->response->success(['accessToken' => $token]);
        }
        return $this->response->fail(10001, $token);
    }

    public function getOpenId()
    {
        $code = $this->request->input('code');
        $shop_id = $this->request->input('shop_id');

        if (!$code) {
            return $this->response->fail(10001, 'code参数不能为空');
        }
        $res = $this->wxServer->getAuth((int)$this->store_id, $code);

        if (isset($res['errcode'])) {
            return $this->response->fail($res['errcode'], $res['errmsg']);
        }

        //添加会员
        /** @var User $user */
        $user = User::query()->where('openid', $res['openid'])->first()->toArray();
        if (!empty($user)) {
            $res['uid'] = $user['user_id'];
            $order = Order::query()->where('user_id', $user['user_id'])->first()->toArray();
            $res['new_user'] = empty($order) ? true : false;
        } else {
            //添加会员卡
            $rule = MemberIntegralRule::query()->where('store_id', $this->store_id)->first()->toArray();
            $merInsert = [
                'integral' => $rule['reg'],
                'shop_id' => $shop_id,
                'store_id' => $this->store_id,
            ];
            $mid = Db::table('member')->insertGetId($merInsert);

            $insert = [
                'store_id' => $this->store_id,
                'shop_id' => $shop_id,
                'reg_time' => time(),
                'last_login' => time(),
                'oauth' => 'wechat',
                'openid' => $res['openid'],
                'member_id' => $mid,
                'platform' => 1
            ];
            $uid = Db::table('users')->insertGetId($insert);
            $res['uid'] = $uid;
            $res['new_user'] = true;
        }

        return $this->response->success($res);
    }

    public function isNew()
    {
        $uid = $this->request->input('uid');
        $order = Order::query()->where('user_id', $uid)->first()->toArray();
        $isNew = empty($order) ? true : false;

        return $this->response->success([$isNew]);
    }

    public function getUserInfo()
    {
        $uid = $this->request->input('uid');

        $user = User::query()
            ->where('user_id', $uid)
            ->first();
        if ($user == null) {
            return $this->response->success();
        }
        if ($user->member->integral == null || $user->member->integral < 0) {
            $user->member->integral = 0;
        }

        return $this->response->success($user);
    }

    public function decryptData()
    {
        $session = $this->request->input('session');
        $iv = $this->request->input('iv');
        $encryptedData = $this->request->input('encryptedData');
        if (!$session || !$iv || !$encryptedData) {
            return $this->response->fail(10001, 'session or iv or encryptedData required');
        }

        $decryptedData = $this->appMini->encryptor->decryptData($session, $iv, $encryptedData);

        return $this->response->success(['decryptedData' => $decryptedData]);
    }

    public function reciveUserInfo()
    {
        $avatar = $this->request->input('avatarUrl');
        $nickName = $this->request->input('nickName');
        $sex = $this->request->input('gender', 0);
        $uid = $this->request->input('uid');
        $mobile = $this->request->input('mobile', '');
        //todo 过滤nick_name特殊符号
        if ($nickName) {
            $nickName = preg_replace("/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}]/u", "", $nickName);
        }
        $where = [
            'avatar' => $avatar,
            'sex' => intval($sex),
            'nick_name' => $nickName
        ];
        if ($mobile != '') {
            $where['mobile'] = $mobile;
        }
        Db::table('users')
            ->where('user_id', $uid)
            ->update($where);
        return $this->response->success();
    }
}
