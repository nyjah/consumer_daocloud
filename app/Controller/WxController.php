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
            var_dump($rule);
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

}
