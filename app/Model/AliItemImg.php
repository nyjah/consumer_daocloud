<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $create_time 
 * @property string $resource_id 
 * @property string $img 
 * @property int $store_id 
 * @property int $is_cover 
 * @property int $goods_id 
 * @property int $deleted 
 */
class AliItemImg extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ali_item_imgs';
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
    protected $casts = ['id' => 'integer', 'create_time' => 'integer', 'store_id' => 'integer', 'is_cover' => 'integer', 'goods_id' => 'integer', 'deleted' => 'integer'];
}