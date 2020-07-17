<?php
declare(strict_types=1);

namespace App\CommonServer;


use App\Model\StoreDevConfig;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Utils\Context;
use EasyWeChat\Factory;


class WxServer
{
    /*
     * private $devConfig
     * private $appOfficial
     * private $appMini
     * private $store_id
     * private $storeDevConfig
     */

    /**
     * @Inject
     * @var StoreDevConfig
     */
    private $storeConfig;

    public function __get($name)
    {
        return Context::get(__CLASS__ . '_' . $name);
    }

    public function __set($name, $value)
    {
        Context::set(__CLASS__ . '_' . $name, $value);
    }

    /*
     * @params $store_id int
     */
    public function initWx(int $store_id): void
    {
        $this->devConfig = $this->storeConfig->getStoreConfig($store_id);
        $configOfficial = [
            'app_id' => $this->devConfig['wx_sub_offical_appid'],
            'secret' => $this->devConfig['wx_sub_offical_secret'],
            'response_type' => 'array'
        ];
        $configMini = [
            'app_id' => $this->devConfig['wx_mini_sub_appid'],
            'secret' => $this->devConfig['wx_mini_sub_secret'],
            'response_type' => 'array',
//            'log' => [
//                'level' => 'debug',
//                'file' => BASE_PATH . 'runtime/logs/' . date('Ymd') . '/wechat.log',
//            ],
        ];

        $this->appOfficial = Factory::officialAccount($configOfficial);
        $this->appMini = Factory::miniProgram($configMini);
    }

    /*
     * @params $store_id int
     * return string
     */
    public function getAccessToken(int $store_id): string
    {
        $this->initWx($store_id);
        if (($this->devConfig['wx_accesstoken_expire'] - time()) > 3600) {
            $accessToken = $this->devConfig['wx_accesstoken'];
        } else {
            $token = $this->appOfficial->access_token->getToken(true);
            $this->storeConfig->upStoreConfig($store_id, $token['expires_in'], $token['access_token']);
            $accessToken = $token['access_token'];
        }

        return $accessToken;
    }

    /*
     * @params $code string
     * return array
     */
    public function getAuth(int $store_id, string $code): array
    {
        $this->initWx($store_id);
        return $this->appMini->auth->session($code);
    }
}