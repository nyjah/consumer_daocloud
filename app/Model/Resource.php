<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $url 
 * @property int $type 
 * @property int $shop_id 
 * @property int $store_id 
 * @property string $title 
 * @property int $create_time 
 * @property int $upate_time 
 * @property int $deleted 
 */
class Resource extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resources';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'shop_id' => 'integer', 'store_id' => 'integer', 'create_time' => 'integer', 'upate_time' => 'integer', 'deleted' => 'integer'];
}