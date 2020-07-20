<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $cat_id 
 * @property string $cat_name 
 * @property int $parent_id 
 * @property int $store_id 
 * @property int $cat_sort 
 * @property int $is_show 
 * @property int $is_nav_show 
 * @property int $is_recommend 
 * @property int $show_num 
 */
class StoreGoodsClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_goods_class';
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
    protected $casts = ['cat_id' => 'integer', 'parent_id' => 'integer', 'store_id' => 'integer', 'cat_sort' => 'integer', 'is_show' => 'integer', 'is_nav_show' => 'integer', 'is_recommend' => 'integer', 'show_num' => 'integer'];
}