<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $re_id 
 * @property int $re_grade_id 
 * @property string $re_grade_name 
 * @property float $re_grade_price 
 * @property int $re_year 
 * @property float $re_pay_amount 
 * @property string $re_store_name 
 * @property int $re_store_id 
 * @property int $re_state 
 * @property int $re_start_time 
 * @property int $re_end_time 
 * @property int $re_create_time 
 * @property string $re_pay_cert 
 * @property string $re_pay_cert_explain 
 */
class StoreReopen extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_reopen';
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
    protected $casts = ['re_id' => 'integer', 're_grade_id' => 'integer', 're_grade_price' => 'float', 're_year' => 'integer', 're_pay_amount' => 'float', 're_store_id' => 'integer', 're_state' => 'integer', 're_start_time' => 'integer', 're_end_time' => 'integer', 're_create_time' => 'integer'];
}