<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $erp_catgory_id 
 * @property string $name 
 * @property string $mobile_name 
 * @property int $store_id 
 * @property int $parent_id 
 * @property string $parent_id_path 
 * @property int $level 
 * @property int $sort_order 
 * @property int $is_show 
 * @property string $image 
 * @property int $is_hot 
 * @property int $cat_group 
 * @property int $commission 
 * @property int $commission_rate 
 * @property int $type_id 
 */
class GoodsCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_category';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'parent_id' => 'integer', 'level' => 'integer', 'sort_order' => 'integer', 'is_show' => 'integer', 'is_hot' => 'integer', 'cat_group' => 'integer', 'commission' => 'integer', 'commission_rate' => 'integer', 'type_id' => 'integer'];
}