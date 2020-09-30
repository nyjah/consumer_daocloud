<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\Utils\Context;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use App\CommonServer\ToolServer;
use App\Middleware\HeadMiddleware;
use App\Rpc\GoodsService;

/**
 * @AutoController()
 * @Middleware(HeadMiddleware::class)
 */
class IndexController extends BaseController
{

    /*
     * private $token
     */

    /**
     * @Inject
     * @var ToolServer
     */
    private $toolServer;

    /**
     * @Inject
     * @var GoodsService
     */
    private $GoodsService;


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


    public function index()
    {
//        return time();
        return $this->GoodsService->add(1, 2);
    }

    public function getToken()
    {
        $payload = [
            'iss' => 'minicw',
            'iat' => time(),
            'exp' => time() + (3600 * 24 * 30),
            'nbf' => time(),
            'jti' => md5(uniqid('JWT') . time())
        ];
        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT',
        ];

        $base64header = $this->toolServer->base64UrlEncode(json_encode($header, JSON_UNESCAPED_UNICODE));
        $base64payload = $this->toolServer->base64UrlEncode(json_encode($payload, JSON_UNESCAPED_UNICODE));
        $token = $base64header . '.' . $base64payload . '.' . $this->toolServer->signature($base64header . '.' . $base64payload);
        return $this->response->success(['token' => $token]);

    }

}
