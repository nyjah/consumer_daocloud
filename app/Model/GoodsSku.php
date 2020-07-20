<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $goods_id 
 * @property string $content 
 * @property int $stock_num 
 * @property float $price 
 * @property int $create_time 
 * @property int $update_time 
 */
class GoodsSku extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_sku';
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
    protected $casts = ['id' => 'integer', 'goods_id' => 'integer', 'stock_num' => 'integer', 'price' => 'float', 'create_time' => 'integer', 'update_time' => 'integer'];
}