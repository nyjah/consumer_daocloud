<?php


namespace App\Dao;


use App\Model\StoreDevConfig;
use Hyperf\Cache\Annotation\CachePut;
use Hyperf\Cache\Annotation\Cacheable;

class StoreDevConfigDao
{
    /**
     * @Cacheable(prefix="storeDevConfig",ttl=86400,value="_#{store_id}")
     */
    public function getStoreConfig($store_id)
    {
        $res = StoreDevConfig::query()
            ->where('store_id', $store_id)
            ->first();

        return $res;
    }

    /**
     * @CachePut(prefix="storeDevConfig",ttl=86400,value="_#{store_id}")
     */
    public function upStoreConfig($store_id, $expires_in, $access_token): void
    {
        StoreDevConfig::query()
            ->where('store_id', $store_id)
            ->update([
                'wx_accesstoken_expire' => $expires_in + time(),
                'wx_accesstoken' => $access_token
            ]);

    }
    
}