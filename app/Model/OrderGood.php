<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $rec_id 
 * @property int $order_id 
 * @property int $user_id 
 * @property int $goods_id 
 * @property string $goods_name 
 * @property string $goods_sn 
 * @property int $goods_num 
 * @property int $quantity 
 * @property int $return_num 
 * @property float $market_price 
 * @property float $goods_price 
 * @property float $cost_price 
 * @property float $mch_prom_price 
 * @property float $finaly_sell_price 
 * @property float $member_goods_price 
 * @property int $give_integral 
 * @property string $spec_key 
 * @property string $spec_key_name 
 * @property string $bar_code 
 * @property int $is_comment 
 * @property int $prom_type 
 * @property int $prom_id 
 * @property int $is_send 
 * @property int $delivery_id 
 * @property string $sku 
 * @property int $store_id 
 * @property int $commission 
 * @property int $is_checkout 
 * @property int $deleted 
 * @property float $distribut 
 * @property int $weight 
 * @property int $shop_id 
 * @property string $ts 
 */
class OrderGood extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_goods';
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
    protected $casts = ['rec_id' => 'integer', 'order_id' => 'integer', 'user_id' => 'integer', 'goods_id' => 'integer', 'goods_num' => 'integer', 'quantity' => 'integer', 'return_num' => 'integer', 'market_price' => 'float', 'goods_price' => 'float', 'cost_price' => 'float', 'mch_prom_price' => 'float', 'finaly_sell_price' => 'float', 'member_goods_price' => 'float', 'give_integral' => 'integer', 'is_comment' => 'integer', 'prom_type' => 'integer', 'prom_id' => 'integer', 'is_send' => 'integer', 'delivery_id' => 'integer', 'store_id' => 'integer', 'commission' => 'integer', 'is_checkout' => 'integer', 'deleted' => 'integer', 'distribut' => 'float', 'weight' => 'integer', 'shop_id' => 'integer'];
    public $timestamps = false;
}