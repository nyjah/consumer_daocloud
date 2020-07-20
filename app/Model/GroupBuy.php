<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $goods_id 
 * @property float $price 
 * @property int $goods_num 
 * @property int $buy_num 
 * @property int $order_num 
 * @property int $virtual_num 
 * @property float $rebate 
 * @property string $intro 
 * @property float $goods_price 
 * @property string $goods_name 
 * @property int $recommend 
 * @property int $views 
 * @property int $min_num 
 * @property int $store_id 
 * @property int $status 
 */
class GroupBuy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'group_buy';
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
    protected $casts = ['id' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'goods_id' => 'integer', 'price' => 'float', 'goods_num' => 'integer', 'buy_num' => 'integer', 'order_num' => 'integer', 'virtual_num' => 'integer', 'rebate' => 'float', 'goods_price' => 'float', 'recommend' => 'integer', 'views' => 'integer', 'min_num' => 'integer', 'store_id' => 'integer', 'status' => 'integer'];
}