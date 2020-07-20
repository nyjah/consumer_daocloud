<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $goods_id 
 * @property string $username 
 * @property int $add_time 
 * @property int $consult_type 
 * @property string $content 
 * @property int $parent_id 
 * @property int $store_id 
 * @property int $is_show 
 */
class GoodsConsult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_consult';
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
    protected $casts = ['id' => 'integer', 'goods_id' => 'integer', 'add_time' => 'integer', 'consult_type' => 'integer', 'parent_id' => 'integer', 'store_id' => 'integer', 'is_show' => 'integer'];
}