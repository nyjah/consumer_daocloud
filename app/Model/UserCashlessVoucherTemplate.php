<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $template_id 
 * @property string $img 
 * @property int $voucher_quantity 
 * @property int $publish_count 
 * @property int $used_count 
 * @property string $ali_appid 
 * @property string $gift_template_id 
 * @property string $description 
 * @property int $create_time 
 * @property float $amount 
 * @property int $publish_start_time 
 * @property int $publish_end_time 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $type 
 * @property int $status 
 * @property string $title 
 * @property string $detail 
 * @property float $floor_amount 
 */
class UserCashlessVoucherTemplate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_cashless_voucher_template';
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
    protected $casts = ['id' => 'integer', 'voucher_quantity' => 'integer', 'publish_count' => 'integer', 'used_count' => 'integer', 'create_time' => 'integer', 'amount' => 'float', 'publish_start_time' => 'integer', 'publish_end_time' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'type' => 'integer', 'status' => 'integer', 'floor_amount' => 'float'];
}