<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $keyword 
 * @property string $desc 
 * @property string $pic 
 * @property string $url 
 * @property string $createtime 
 * @property string $uptatetime 
 * @property string $token 
 * @property string $title 
 * @property int $goods_id 
 * @property string $goods_name 
 */
class WxImg extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wx_img';
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
    protected $casts = ['id' => 'integer', 'goods_id' => 'integer'];
}