<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property string $title 
 * @property int $commission_id 
 * @property int $freight_part 
 * @property int $off 
 * @property int $text_off 
 * @property int $erp_open 
 * @property int $created_time 
 * @property int $pay_time 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $pay_type 
 * @property string $send_day 
 * @property string $send_time 
 */
class SalesRule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales_rule';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'commission_id' => 'integer', 'freight_part' => 'integer', 'off' => 'integer', 'text_off' => 'integer', 'erp_open' => 'integer', 'created_time' => 'integer', 'pay_time' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'pay_type' => 'integer'];
}