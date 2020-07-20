<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $company_id 
 * @property string $order_sn 
 * @property int $order_id 
 * @property int $delivery_status 
 * @property string $delivery_person_name 
 * @property string $delivery_person_tel 
 * @property string $client_id 
 */
class ThirdDelivery extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'third_delivery';
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
    protected $casts = ['id' => 'integer', 'company_id' => 'integer', 'order_id' => 'integer', 'delivery_status' => 'integer'];
}