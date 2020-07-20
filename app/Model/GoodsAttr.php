<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $goods_attr_id 
 * @property int $goods_id 
 * @property int $attr_id 
 * @property string $attr_value 
 * @property string $attr_price 
 */
class GoodsAttr extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_attr';
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
    protected $casts = ['goods_attr_id' => 'integer', 'goods_id' => 'integer', 'attr_id' => 'integer'];
}