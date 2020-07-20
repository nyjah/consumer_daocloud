<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $img_id 
 * @property int $goods_id 
 * @property string $image_url 
 * @property int $img_sort 
 */
class GoodsImage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods_images';
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
    protected $casts = ['img_id' => 'integer', 'goods_id' => 'integer', 'img_sort' => 'integer'];
}