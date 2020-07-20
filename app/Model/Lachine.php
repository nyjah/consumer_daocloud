<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $bee_id 
 * @property string $bee_name 
 * @property string $phone 
 * @property int $store_id 
 * @property int $shop_id 
 * @property int $scan_num 
 * @property int $valid_scan_num 
 * @property float $total_amount 
 * @property int $total_order_num 
 * @property string $qr_code 
 * @property int $create_time 
 * @property int $expire_start_time 
 * @property int $expire_end_time 
 * @property int $is_bind 
 */
class Lachine extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lachine';
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
    protected $casts = ['bee_id' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'scan_num' => 'integer', 'valid_scan_num' => 'integer', 'total_amount' => 'float', 'total_order_num' => 'integer', 'create_time' => 'integer', 'expire_start_time' => 'integer', 'expire_end_time' => 'integer', 'is_bind' => 'integer'];
}