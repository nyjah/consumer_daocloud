<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 
 * @property int $integral 
 * @property int $type 
 * @property \Carbon\Carbon $created_at 
 */
class Integral extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'integral';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'integral' => 'integer', 'type' => 'integer', 'created_at' => 'datetime'];
}