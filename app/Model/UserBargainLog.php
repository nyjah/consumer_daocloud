<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property int $user_bargain_id 
 * @property string $user_nickname 
 * @property string $user_avatar 
 * @property float $bargain_price 
 * @property float $before_bargain_price 
 * @property int $create_time 
 */
class UserBargainLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_bargain_log';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'user_bargain_id' => 'integer', 'bargain_price' => 'float', 'before_bargain_price' => 'float', 'create_time' => 'integer'];
}