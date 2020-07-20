<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 
 * @property int $create_time 
 * @property string $template_id 
 * @property int $voucher_quantity 
 * @property int $publish_count 
 * @property int $used_count 
 * @property int $goods_id 
 * @property string $goods_sn 
 * @property int $publish_start_time 
 * @property int $publish_end_time 
 * @property string $day_rule 
 * @property int $available_time_begin 
 * @property int $available_time_end 
 * @property int $valid_period_start 
 * @property int $valid_period_end 
 * @property string $description 
 * @property string $goods_info 
 * @property int $store_id 
 * @property int $shops_id 
 * @property int $free_use 
 * @property int $status 
 * @property int $type 
 * @property int $cover 
 * @property string $detail_imgs 
 * @property int $goods_ceiling_quantity 
 * @property float $amount 
 * @property float $discount 
 * @property float $special_price 
 * @property float $goods_origin_price 
 * @property float $floor_amount 
 * @property int $tag 
 * @property int $max_limit 
 * @property int $is_show 
 * @property int $deleted 
 */
class CashLessItemVoucherTemplate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cash_less_item_voucher_template';
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
    protected $casts = ['id' => 'integer', 'create_time' => 'integer', 'voucher_quantity' => 'integer', 'publish_count' => 'integer', 'used_count' => 'integer', 'goods_id' => 'integer', 'publish_start_time' => 'integer', 'publish_end_time' => 'integer', 'available_time_begin' => 'integer', 'available_time_end' => 'integer', 'valid_period_start' => 'integer', 'valid_period_end' => 'integer', 'store_id' => 'integer', 'shops_id' => 'integer', 'free_use' => 'integer', 'status' => 'integer', 'type' => 'integer', 'cover' => 'integer', 'goods_ceiling_quantity' => 'integer', 'amount' => 'float', 'discount' => 'float', 'special_price' => 'float', 'goods_origin_price' => 'float', 'floor_amount' => 'float', 'tag' => 'integer', 'max_limit' => 'integer', 'is_show' => 'integer', 'deleted' => 'integer'];
}