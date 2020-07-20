<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $order_id 
 * @property int $order_sort 
 * @property string $order_sn 
 * @property int $independent 
 * @property int $seller_id 
 * @property int $store_id 
 * @property int $shops_id 
 * @property int $prom_type 
 * @property int $prom_success 
 * @property int $order_type 
 * @property int $delivery_type 
 * @property string $trade_no 
 * @property int $delivery_company_id 
 * @property string $delivery_no 
 * @property int $user_id 
 * @property int $bee_id 
 * @property int $order_status 
 * @property int $pay_status 
 * @property string $consignee 
 * @property int $refund_status 
 * @property int $address_id 
 * @property int $send_time 
 * @property int $send_day 
 * @property int $pay_type 
 * @property int $pay_time 
 * @property string $promotion_detail 
 * @property string $detail 
 * @property string $wx_user_card_codes 
 * @property string $invoice_title 
 * @property int $is_free_distribution 
 * @property int $integral 
 * @property float $integral_money 
 * @property float $plastic_price 
 * @property float $shipping_price 
 * @property float $supply_shipping_price 
 * @property float $market_price 
 * @property float $goods_price 
 * @property float $deposit 
 * @property float $booking_payment 
 * @property float $deduct 
 * @property float $discount 
 * @property float $final_payment 
 * @property float $total_amount 
 * @property float $return_amount 
 * @property int $weight 
 * @property int $add_time 
 * @property int $create_time 
 * @property int $confirm_time 
 * @property int $arrive_time 
 * @property int $shipping_time 
 * @property string $user_note 
 * @property string $admin_note 
 * @property int $is_comment 
 * @property int $deleted 
 * @property int $order_status_tmp 
 * @property int $close_type 
 * @property int $look_status 
 * @property string $dada_preorder_params 
 * @property int $update_time 
 * @property int $picking_time 
 * @property int $picking_id 
 * @property int $verify_id 
 * @property int $delivery_id 
 * @property int $create_order_id 
 * @property string $delivery_time 
 * @property string $voucher 
 */
class Order618 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_618';
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
    protected $casts = ['order_id' => 'integer', 'order_sort' => 'integer', 'independent' => 'integer', 'seller_id' => 'integer', 'store_id' => 'integer', 'shops_id' => 'integer', 'prom_type' => 'integer', 'prom_success' => 'integer', 'order_type' => 'integer', 'delivery_type' => 'integer', 'delivery_company_id' => 'integer', 'user_id' => 'integer', 'bee_id' => 'integer', 'order_status' => 'integer', 'pay_status' => 'integer', 'refund_status' => 'integer', 'address_id' => 'integer', 'send_time' => 'integer', 'send_day' => 'integer', 'pay_type' => 'integer', 'pay_time' => 'integer', 'is_free_distribution' => 'integer', 'integral' => 'integer', 'integral_money' => 'float', 'plastic_price' => 'float', 'shipping_price' => 'float', 'supply_shipping_price' => 'float', 'market_price' => 'float', 'goods_price' => 'float', 'deposit' => 'float', 'booking_payment' => 'float', 'deduct' => 'float', 'discount' => 'float', 'final_payment' => 'float', 'total_amount' => 'float', 'return_amount' => 'float', 'weight' => 'integer', 'add_time' => 'integer', 'create_time' => 'integer', 'confirm_time' => 'integer', 'arrive_time' => 'integer', 'shipping_time' => 'integer', 'is_comment' => 'integer', 'deleted' => 'integer', 'order_status_tmp' => 'integer', 'close_type' => 'integer', 'look_status' => 'integer', 'update_time' => 'integer', 'picking_time' => 'integer', 'picking_id' => 'integer', 'verify_id' => 'integer', 'delivery_id' => 'integer', 'create_order_id' => 'integer'];
}