<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 
 * @property string $uname 
 * @property string $keyword 
 * @property int $precisions 
 * @property string $text 
 * @property string $createtime 
 * @property string $updatetime 
 * @property int $click 
 * @property string $token 
 */
class WxText extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wx_text';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'precisions' => 'integer', 'click' => 'integer'];
}