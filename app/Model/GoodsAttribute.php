<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $attr_id 
 * @property string $attr_name 
 * @property int $type_id 
 * @property int $attr_index 
 * @property int $attr_type 
 * @property int $attr_input_type 
 * @property string $attr_values 
 * @property int $order 
 */
class GoodsAttribute extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_attribute';
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
    protected $casts = ['attr_id' => 'integer', 'type_id' => 'integer', 'attr_index' => 'integer', 'attr_type' => 'integer', 'attr_input_type' => 'integer', 'order' => 'integer'];
}