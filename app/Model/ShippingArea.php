<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $shipping_area_id 
 * @property string $shipping_area_name 
 * @property string $shipping_code 
 * @property string $config 
 * @property int $update_time 
 * @property int $is_default 
 * @property int $is_close 
 * @property int $store_id 
 */
class ShippingArea extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shipping_area';
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
    protected $casts = ['shipping_area_id' => 'integer', 'update_time' => 'integer', 'is_default' => 'integer', 'is_close' => 'integer', 'store_id' => 'integer'];
}