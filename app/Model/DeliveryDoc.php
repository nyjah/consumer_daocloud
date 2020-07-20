<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $order_id 
 * @property string $order_sn 
 * @property int $user_id 
 * @property int $admin_id 
 * @property string $consignee 
 * @property string $zipcode 
 * @property string $mobile 
 * @property int $country 
 * @property int $province 
 * @property int $city 
 * @property int $district 
 * @property string $address 
 * @property string $shipping_code 
 * @property string $shipping_name 
 * @property float $shipping_price 
 * @property string $invoice_no 
 * @property string $tel 
 * @property string $note 
 * @property int $best_time 
 * @property int $create_time 
 * @property int $is_del 
 * @property int $store_id 
 */
class DeliveryDoc extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'delivery_doc';
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
    protected $casts = ['id' => 'integer', 'order_id' => 'integer', 'user_id' => 'integer', 'admin_id' => 'integer', 'country' => 'integer', 'province' => 'integer', 'city' => 'integer', 'district' => 'integer', 'shipping_price' => 'float', 'best_time' => 'integer', 'create_time' => 'integer', 'is_del' => 'integer', 'store_id' => 'integer'];
}