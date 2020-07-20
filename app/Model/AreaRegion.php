<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $shipping_area_id 
 * @property int $region_id 
 * @property int $store_id 
 */
class AreaRegion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'area_region';
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
    protected $casts = ['shipping_area_id' => 'integer', 'region_id' => 'integer', 'store_id' => 'integer'];
}