<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $bid 
 * @property int $store_id 
 * @property int $commis_rate 
 * @property int $class_1 
 * @property int $class_2 
 * @property int $class_3 
 * @property int $state 
 */
class StoreBindClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_bind_class';
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
    protected $casts = ['bid' => 'integer', 'store_id' => 'integer', 'commis_rate' => 'integer', 'class_1' => 'integer', 'class_2' => 'integer', 'class_3' => 'integer', 'state' => 'integer'];
}