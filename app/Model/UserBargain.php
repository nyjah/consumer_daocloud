<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property string $goods_sn 
 * @property int $goods_id 
 * @property string $goods_title 
 * @property string $goods_original_img 
 * @property int $marketing_id 
 * @property int $marketing_good_id 
 * @property int $shop_id 
 * @property int $store_id 
 * @property int $order_id 
 * @property float $origin_price 
 * @property float $target_price 
 * @property int $bargain_times 
 * @property int $target_num 
 * @property int $floor_num 
 * @property int $new_user_rate 
 * @property float $current_price 
 * @property int $deal_expire_time 
 * @property int $bargain_expire_time 
 * @property int $create_time 
 * @property int $update_time 
 * @property int $notice 
 */
class UserBargain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_bargain';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'goods_id' => 'integer', 'marketing_id' => 'integer', 'marketing_good_id' => 'integer', 'shop_id' => 'integer', 'store_id' => 'integer', 'order_id' => 'integer', 'origin_price' => 'float', 'target_price' => 'float', 'bargain_times' => 'integer', 'target_num' => 'integer', 'floor_num' => 'integer', 'new_user_rate' => 'integer', 'current_price' => 'float', 'deal_expire_time' => 'integer', 'bargain_expire_time' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer', 'notice' => 'integer'];
}