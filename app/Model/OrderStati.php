<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $start_date 
 * @property int $end_date 
 * @property float $order_totals 
 * @property float $shipping_totals 
 * @property float $return_totals 
 * @property int $return_integral 
 * @property float $commis_totals 
 * @property float $give_integral 
 * @property float $result_totals 
 * @property int $create_date 
 * @property int $store_id 
 * @property float $order_prom_amount 
 * @property float $coupon_price 
 * @property float $distribut 
 */
class OrderStati extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_statis';
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
    protected $casts = ['id' => 'integer', 'start_date' => 'integer', 'end_date' => 'integer', 'order_totals' => 'float', 'shipping_totals' => 'float', 'return_totals' => 'float', 'return_integral' => 'integer', 'commis_totals' => 'float', 'give_integral' => 'float', 'result_totals' => 'float', 'create_date' => 'integer', 'store_id' => 'integer', 'order_prom_amount' => 'float', 'coupon_price' => 'float', 'distribut' => 'float'];
}