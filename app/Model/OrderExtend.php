<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $order_id 
 * @property int $store_id 
 * @property int $shipping_time 
 * @property int $shipping_express_id 
 * @property int $evaluation_time 
 * @property string $evalseller_state 
 * @property int $evalseller_time 
 * @property string $order_message 
 * @property int $order_pointscount 
 * @property int $voucher_price 
 * @property string $voucher_code 
 * @property string $deliver_explain 
 * @property int $daddress_id 
 * @property string $reciver_name 
 * @property string $reciver_info 
 * @property int $reciver_province_id 
 * @property int $reciver_city_id 
 * @property string $invoice_info 
 * @property string $promotion_info 
 * @property string $dlyo_pickup_code 
 */
class OrderExtend extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_extend';
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
    protected $casts = ['order_id' => 'integer', 'store_id' => 'integer', 'shipping_time' => 'integer', 'shipping_express_id' => 'integer', 'evaluation_time' => 'integer', 'evalseller_time' => 'integer', 'order_pointscount' => 'integer', 'voucher_price' => 'integer', 'daddress_id' => 'integer', 'reciver_province_id' => 'integer', 'reciver_city_id' => 'integer'];
}