<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $level 
 * @property string $name 
 * @property int $sort 
 * @property string $type 
 * @property string $value 
 * @property string $token 
 * @property int $pid 
 */
class WxMenu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wx_menu';
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
    protected $casts = ['id' => 'integer', 'level' => 'integer', 'sort' => 'integer', 'pid' => 'integer'];
}