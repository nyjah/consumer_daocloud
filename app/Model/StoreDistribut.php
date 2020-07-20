<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $switch 
 * @property int $condition 
 * @property int $distribut_pattern 
 * @property int $first_rate 
 * @property int $second_rate 
 * @property int $third_rate 
 * @property int $date 
 * @property int $store_id 
 */
class StoreDistribut extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_distribut';
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
    protected $casts = ['id' => 'integer', 'switch' => 'integer', 'condition' => 'integer', 'distribut_pattern' => 'integer', 'first_rate' => 'integer', 'second_rate' => 'integer', 'third_rate' => 'integer', 'date' => 'integer', 'store_id' => 'integer'];
}