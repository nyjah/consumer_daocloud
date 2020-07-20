<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $order_id 
 * @property string $order_sn 
 * @property int $store_id 
 * @property int $shop_id 
 * @property int $user_id 
 * @property string $trade_no 
 * @property int $salers_rule_id 
 * @property int $pay_type 
 * @property int $pay_time 
 * @property int $pay_status 
 * @property int $goods_id 
 * @property string $goods_sn 
 * @property int $goods_num 
 * @property int $process 
 * @property float $prom_price 
 * @property float $tail_money 
 * @property float $pre_money 
 * @property float $final_payment 
 * @property int $freight_part 
 * @property string $user_note 
 * @property int $text_off 
 * @property int $is_del 
 * @property int $end_time 
 * @property int $tail_pay_time 
 * @property int $create_time 
 * @property int $update_time 
 */
class PreSellOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pre_sell_order';
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
    protected $casts = ['id' => 'integer', 'order_id' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'user_id' => 'integer', 'salers_rule_id' => 'integer', 'pay_type' => 'integer', 'pay_time' => 'integer', 'pay_status' => 'integer', 'goods_id' => 'integer', 'goods_num' => 'integer', 'process' => 'integer', 'prom_price' => 'float', 'tail_money' => 'float', 'pre_money' => 'float', 'final_payment' => 'float', 'freight_part' => 'integer', 'text_off' => 'integer', 'is_del' => 'integer', 'end_time' => 'integer', 'tail_pay_time' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer'];
}