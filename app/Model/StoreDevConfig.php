<?php

declare (strict_types=1);

namespace App\Model;

use Hyperf\Cache\Annotation\CachePut;
use Hyperf\Cache\Annotation\Cacheable;
use Hyperf\DbConnection\Db;
use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id
 * @property int $store_id
 * @property string $mini_program_name
 * @property string $ali_pid
 * @property string $ali_isv_pid
 * @property string $ali_appid
 * @property string $ali_pay_public_key
 * @property string $ali_public_key
 * @property string $ali_private_key
 * @property string $ali_aes
 * @property string $ali_accesstoken
 * @property float $ali_opreate_rate
 * @property string $a_map_key
 * @property string $wx_gh
 * @property string $wx_isv_offical_appid
 * @property string $wx_sub_offical_appid
 * @property string $wx_sub_offical_secret
 * @property string $wx_isv_offical_secret
 * @property string $wx_aes_key
 * @property string $wx_token
 * @property string $wx_accesstoken
 * @property int $wx_accesstoken_expire
 * @property int $wx_isv_mch_id
 * @property int $wx_sub_mch_id
 * @property string $wx_mch_key
 * @property string $wx_isv_mch_key
 * @property string $wx_mini_isv_appid
 * @property string $wx_mini_sub_appid
 * @property string $wx_mini_sub_secret
 * @property string $wx_mini_origin_appid
 * @property string $wx_apiclient_cert
 * @property string $wx_apiclient_key
 * @property string $wx_isv_name
 * @property string $wx_isv_apiclient_cert
 * @property string $wx_isv_apiclient_key
 * @property string $wx_profit_share
 * @property float $wx_profit_share_rate
 * @property float $wx_fee_rate
 * @property float $wx_opreate_rate
 * @property string $app_auth_token
 */
class StoreDevConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_dev_config';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'ali_opreate_rate' => 'float', 'wx_accesstoken_expire' => 'integer', 'wx_isv_mch_id' => 'integer', 'wx_sub_mch_id' => 'integer', 'wx_profit_share_rate' => 'float', 'wx_fee_rate' => 'float', 'wx_opreate_rate' => 'float'];

    public $timestamps = false;

    /**
     * @Cacheable(prefix="storeDevConfig",ttl=86400,value="_#{store_id}")
     */
    public function getStoreConfig($store_id)
    {
        $res = Db::table('store_dev_config')
            ->where('store_id', $store_id)
            ->first();

        return $res;
    }

    /**
     * @CachePut(prefix="storeDevConfig",ttl=86400,value="_#{store_id}")
     */
    public function upStoreConfig($store_id, $expires_in, $access_token): void
    {
        Db::table('store_dev_config')
            ->where('store_id', $store_id)
            ->update([
                'wx_accesstoken_expire' => $expires_in + time(),
                'wx_accesstoken' => $access_token]);

    }

}