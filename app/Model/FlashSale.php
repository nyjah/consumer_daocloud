<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 
 * @property int $goods_id 
 * @property float $price 
 * @property int $goods_num 
 * @property int $buy_limit 
 * @property int $buy_num 
 * @property int $order_num 
 * @property string $description 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $is_end 
 * @property string $goods_name 
 * @property int $store_id 
 * @property int $recommend 
 * @property int $status 
 */
class FlashSale extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'flash_sale';
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
    protected $casts = ['id' => 'integer', 'goods_id' => 'integer', 'price' => 'float', 'goods_num' => 'integer', 'buy_limit' => 'integer', 'buy_num' => 'integer', 'order_num' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'is_end' => 'integer', 'store_id' => 'integer', 'recommend' => 'integer', 'status' => 'integer'];
}