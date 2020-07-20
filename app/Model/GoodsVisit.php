<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $goods_id 
 * @property int $user_id 
 * @property int $visittime 
 * @property int $cat_id1 
 * @property int $cat_id2 
 * @property int $cat_id3 
 * @property int $visit_id 
 */
class GoodsVisit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_visit';
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
    protected $casts = ['goods_id' => 'integer', 'user_id' => 'integer', 'visittime' => 'integer', 'cat_id1' => 'integer', 'cat_id2' => 'integer', 'cat_id3' => 'integer', 'visit_id' => 'integer'];
}