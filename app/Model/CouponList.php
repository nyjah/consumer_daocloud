<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $cid 
 * @property int $type 
 * @property int $uid 
 * @property int $order_id 
 * @property int $use_time 
 * @property string $code 
 * @property int $send_time 
 * @property int $store_id 
 * @property int $status 
 */
class CouponList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coupon_list';
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
    protected $casts = ['id' => 'integer', 'cid' => 'integer', 'type' => 'integer', 'uid' => 'integer', 'order_id' => 'integer', 'use_time' => 'integer', 'send_time' => 'integer', 'store_id' => 'integer', 'status' => 'integer'];
}