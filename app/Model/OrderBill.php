<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $ob_no 
 * @property int $ob_start_date 
 * @property int $ob_end_date 
 * @property float $ob_order_totals 
 * @property float $ob_shipping_totals 
 * @property float $ob_order_return_totals 
 * @property float $ob_commis_totals 
 * @property float $ob_commis_return_totals 
 * @property float $ob_store_cost_totals 
 * @property float $ob_result_totals 
 * @property int $ob_create_date 
 * @property int $os_month 
 * @property string $ob_state 
 * @property int $ob_pay_date 
 * @property string $ob_pay_content 
 * @property int $ob_store_id 
 * @property string $ob_store_name 
 */
class OrderBill extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_bill';
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
    protected $casts = ['ob_no' => 'integer', 'ob_start_date' => 'integer', 'ob_end_date' => 'integer', 'ob_order_totals' => 'float', 'ob_shipping_totals' => 'float', 'ob_order_return_totals' => 'float', 'ob_commis_totals' => 'float', 'ob_commis_return_totals' => 'float', 'ob_store_cost_totals' => 'float', 'ob_result_totals' => 'float', 'ob_create_date' => 'integer', 'os_month' => 'integer', 'ob_pay_date' => 'integer', 'ob_store_id' => 'integer'];
}