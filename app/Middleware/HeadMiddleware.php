<?php

declare(strict_types=1);

namespace App\Middleware;

use App\CommonServer\ToolServer;
use Hyperf\Di\Annotation\Inject;
use App\Kernel\Http\Response;
use Hyperf\Utils\Context;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;


class HeadMiddleware implements MiddlewareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var Response
     */
    protected $response;

    //免检行为
    private $ignoreAct = [
        'sendsmscode',
        'checkscan',
        'getqrcodeticket',
        'accountlogin',
        'forgetpwd',
        '/index/getToken',
        'login',
        'alipay_system_oauth_token',
        'wxNotify',
        'preOrder',
        'baseAuth',
        'shoppingCartList',
        'getApiLink',
        'receiveImage',
        'newUserCard',
        'get_oss_domain',
        'getCommissionTitle',
        'getCommissionByUse',
        'getCommissionGoods',
        'getChildrenCategory',
        'getGoodsByCateId',
        'listApi',
        'detailApi',
        'saleActivityListApi',
        'saleActivityDetail',
    ];

    /**
     * @Inject
     * @var ToolServer
     */
    private $toolServer;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->response = $this->container->get(Response::class);
        $authorization = $request->getHeaderLine('authorization');
        $client_type = $request->getHeaderLine('client_type');
        $store_id = $request->getHeaderLine('store_id');
        $act = $request->getUri()->getPath();


        //判断是GETTOKEN请求其实还需要做个初步令牌验证而不是直接放行
        if ($act != '/index/getToken') {
            if (empty($authorization)) {
                return $this->response->fail(40001, 'parmas of head invalid');
            } else {
                Context::set('authorization', $authorization);
            }
        }
        if (empty($client_type) || empty($store_id)) {
            return $this->response->fail(40001, 'parmas of head invalid1');
        }
        Context::set('client_type', $client_type);
        Context::set('store_id', $store_id);
        if (!in_array($act, $this->ignoreAct)) {

            if ($act != 'getApiLink' && (!$client_type || !$store_id)) {
                return $this->response->fail(40001, 'errmsg');
            }

            $payload = $this->toolServer->verifyToken($authorization);

            if ($payload == false) {
                return $this->response->fail(40001, '异常消息访问令牌不合法！');
            }
        }
//        $params = $request->getQueryParams();
        return $handler->handle($request);
    }


}