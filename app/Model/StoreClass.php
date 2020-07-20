<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $sc_id 
 * @property string $sc_name 
 * @property int $sc_bail 
 * @property int $sc_sort 
 */
class StoreClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_class';
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
    protected $casts = ['sc_id' => 'integer', 'sc_bail' => 'integer', 'sc_sort' => 'integer'];
}