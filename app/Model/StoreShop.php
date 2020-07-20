<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $addr 
 * @property string $name 
 * @property int $store_id 
 * @property string $position 
 * @property string $amap_gid 
 * @property int $enable_fence 
 * @property int $province_id 
 * @property int $city_id 
 * @property int $area_id 
 * @property int $max_distance 
 * @property float $min_delivery_price 
 * @property string $business_hours 
 * @property string $telephone 
 * @property float $lng 
 * @property float $lat 
 * @property string $self_take 
 * @property int $delivery_company_id 
 * @property float $freight 
 * @property float $full_discount 
 * @property int $pay_module 
 * @property int $create_time 
 * @property int $is_del 
 * @property string $send_day 
 * @property string $erp_shop_id 
 * @property string $send_times 
 * @property string $shops_code 
 * @property string $shops_code_fn 
 * @property string $shops_code_kp 
 * @property string $delivery_dispose 
 * @property int $subsidy_type 
 * @property string $subsidy_expression 
 * @property float $shopping_bag_price 
 */
class StoreShop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_shops';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'enable_fence' => 'integer', 'province_id' => 'integer', 'city_id' => 'integer', 'area_id' => 'integer', 'max_distance' => 'integer', 'min_delivery_price' => 'float', 'lng' => 'float', 'lat' => 'float', 'delivery_company_id' => 'integer', 'freight' => 'float', 'full_discount' => 'float', 'pay_module' => 'integer', 'create_time' => 'integer', 'is_del' => 'integer', 'subsidy_type' => 'integer', 'shopping_bag_price' => 'float'];
}