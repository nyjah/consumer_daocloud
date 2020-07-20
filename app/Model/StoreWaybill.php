<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $store_waybill_id 
 * @property int $store_id 
 * @property int $express_id 
 * @property int $waybill_id 
 * @property string $waybill_name 
 * @property string $store_waybill_data 
 * @property int $is_default 
 * @property int $store_waybill_left 
 * @property int $store_waybill_top 
 */
class StoreWaybill extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_waybill';
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
    protected $casts = ['store_waybill_id' => 'integer', 'store_id' => 'integer', 'express_id' => 'integer', 'waybill_id' => 'integer', 'is_default' => 'integer', 'store_waybill_left' => 'integer', 'store_waybill_top' => 'integer'];
}