<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $goods_id 
 * @property string $key 
 * @property string $key_name 
 * @property float $price 
 * @property int $store_count 
 * @property string $bar_code 
 * @property string $sku 
 * @property int $store_id 
 */
class SpecGoodsPrice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'spec_goods_price';
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
    protected $casts = ['goods_id' => 'integer', 'price' => 'float', 'store_count' => 'integer', 'store_id' => 'integer'];
}