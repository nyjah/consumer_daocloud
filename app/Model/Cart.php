<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property string $session_id 
 * @property int $goods_id 
 * @property string $goods_sn 
 * @property string $goods_name 
 * @property float $market_price 
 * @property float $goods_price 
 * @property float $member_goods_price 
 * @property int $goods_num 
 * @property string $spec_key 
 * @property string $spec_key_name 
 * @property string $bar_code 
 * @property int $selected 
 * @property int $add_time 
 * @property int $prom_type 
 * @property int $prom_id 
 * @property string $sku 
 * @property int $store_id 
 */
class Cart extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cart';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'goods_id' => 'integer', 'market_price' => 'float', 'goods_price' => 'float', 'member_goods_price' => 'float', 'goods_num' => 'integer', 'selected' => 'integer', 'add_time' => 'integer', 'prom_type' => 'integer', 'prom_id' => 'integer', 'store_id' => 'integer'];
}