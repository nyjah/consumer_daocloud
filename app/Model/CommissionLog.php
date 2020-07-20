<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property int $shop_id 
 * @property int $from_user_id 
 * @property string $from_user_name 
 * @property int $to_user_id 
 * @property string $to_user_name 
 * @property int $mobile 
 * @property int $promo_id 
 * @property int $promo_type 
 * @property int $order_id 
 * @property string $order_sn 
 * @property int $platform 
 * @property int $commission 
 * @property int $commission_status 
 * @property int $flag 
 * @property int $get_at 
 * @property int $update_at 
 * @property int $goods_id 
 */
class CommissionLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'commission_log';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'from_user_id' => 'integer', 'to_user_id' => 'integer', 'mobile' => 'integer', 'promo_id' => 'integer', 'promo_type' => 'integer', 'order_id' => 'integer', 'platform' => 'integer', 'commission' => 'integer', 'commission_status' => 'integer', 'flag' => 'integer', 'get_at' => 'integer', 'update_at' => 'integer', 'goods_id' => 'integer'];
}