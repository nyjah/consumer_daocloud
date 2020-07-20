<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 
 * @property int $type 
 * @property float $money 
 * @property float $condition 
 * @property int $createnum 
 * @property int $send_num 
 * @property int $use_num 
 * @property int $send_start_time 
 * @property int $send_end_time 
 * @property int $use_start_time 
 * @property int $use_end_time 
 * @property int $add_time 
 * @property int $store_id 
 * @property int $status 
 * @property string $coupon_info 
 */
class Coupon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coupon';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'money' => 'float', 'condition' => 'float', 'createnum' => 'integer', 'send_num' => 'integer', 'use_num' => 'integer', 'send_start_time' => 'integer', 'send_end_time' => 'integer', 'use_start_time' => 'integer', 'use_end_time' => 'integer', 'add_time' => 'integer', 'store_id' => 'integer', 'status' => 'integer'];
}