<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $address_id 
 * @property int $user_id 
 * @property string $consignee 
 * @property int $city_code 
 * @property string $email 
 * @property string $country 
 * @property string $province 
 * @property string $city 
 * @property string $district 
 * @property string $twon 
 * @property string $address 
 * @property string $zipcode 
 * @property string $mobile 
 * @property int $deleted 
 * @property int $is_default 
 * @property string $location 
 * @property int $minipro_type 
 */
class UserAddress extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_address';
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
    protected $casts = ['address_id' => 'integer', 'user_id' => 'integer', 'city_code' => 'integer', 'deleted' => 'integer', 'is_default' => 'integer', 'minipro_type' => 'integer'];
}