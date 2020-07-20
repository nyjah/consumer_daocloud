<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $attr_k_id 
 * @property string $attr_v 
 * @property int $create_time 
 * @property int $update_time 
 */
class GoodsAttrV extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_attr_v';
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
    protected $casts = ['id' => 'integer', 'attr_k_id' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer'];
}