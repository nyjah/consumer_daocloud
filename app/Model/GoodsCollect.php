<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $collect_id 
 * @property int $user_id 
 * @property int $goods_id 
 * @property int $cat_id3 
 * @property int $add_time 
 */
class GoodsCollect extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_collect';
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
    protected $casts = ['collect_id' => 'integer', 'user_id' => 'integer', 'goods_id' => 'integer', 'cat_id3' => 'integer', 'add_time' => 'integer'];
}