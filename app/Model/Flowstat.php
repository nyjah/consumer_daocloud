<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $stattime 
 * @property int $clicknum 
 * @property int $store_id 
 * @property string $type 
 * @property int $goods_id 
 */
class Flowstat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'flowstat';
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
    protected $casts = ['stattime' => 'integer', 'clicknum' => 'integer', 'store_id' => 'integer', 'goods_id' => 'integer'];
}