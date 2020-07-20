<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $shipping_id 
 * @property string $shipping_code 
 * @property string $shipping_name 
 * @property string $shipping_desc 
 * @property string $insure 
 * @property int $enabled 
 */
class Shipping extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shipping';
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
    protected $casts = ['shipping_id' => 'integer', 'enabled' => 'integer'];
}