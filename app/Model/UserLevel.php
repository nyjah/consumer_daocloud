<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $level_id 
 * @property string $level_name 
 * @property float $amount 
 * @property int $discount 
 * @property string $describe 
 */
class UserLevel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_level';
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
    protected $casts = ['level_id' => 'integer', 'amount' => 'float', 'discount' => 'integer'];
}