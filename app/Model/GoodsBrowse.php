<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $goods_id 
 * @property int $member_id 
 * @property int $browsetime 
 * @property int $gc_id 
 * @property int $gc_id_1 
 * @property int $gc_id_2 
 * @property int $gc_id_3 
 */
class GoodsBrowse extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_browse';
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
    protected $casts = ['goods_id' => 'integer', 'member_id' => 'integer', 'browsetime' => 'integer', 'gc_id' => 'integer', 'gc_id_1' => 'integer', 'gc_id_2' => 'integer', 'gc_id_3' => 'integer'];
}