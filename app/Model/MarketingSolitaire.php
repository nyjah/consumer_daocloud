<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $marketing_id 
 * @property int $resources_id 
 * @property int $min_success_type 
 * @property int $success 
 * @property int $return_success 
 * @property int $delivery_type 
 * @property int $delivery_fee_duty_person 
 * @property int $auto_fake 
 * @property float $min_user_deal_amont 
 * @property float $min_count 
 * @property int $deal_num 
 * @property int $cancel_num 
 * @property int $user_count 
 * @property int $deal_count 
 * @property float $amount_count 
 * @property string $delivery_time 
 * @property string $send_day 
 * @property string $desc 
 */
class MarketingSolitaire extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketing_solitaire';
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
    protected $casts = ['id' => 'integer', 'marketing_id' => 'integer', 'resources_id' => 'integer', 'min_success_type' => 'integer', 'success' => 'integer', 'return_success' => 'integer', 'delivery_type' => 'integer', 'delivery_fee_duty_person' => 'integer', 'auto_fake' => 'integer', 'min_user_deal_amont' => 'float', 'min_count' => 'float', 'deal_num' => 'integer', 'cancel_num' => 'integer', 'user_count' => 'integer', 'deal_count' => 'integer', 'amount_count' => 'float'];
}