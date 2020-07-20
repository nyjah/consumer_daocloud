<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $rec_id 
 * @property int $order_id 
 * @property int $store_id 
 * @property int $user_id 
 * @property string $vr_code 
 * @property int $vr_state 
 * @property int $vr_usetime 
 * @property float $pay_price 
 * @property int $vr_indate 
 * @property int $refund_lock 
 * @property int $vr_invalid_refund 
 */
class VrOrderCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vr_order_code';
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
    protected $casts = ['rec_id' => 'integer', 'order_id' => 'integer', 'store_id' => 'integer', 'user_id' => 'integer', 'vr_state' => 'integer', 'vr_usetime' => 'integer', 'pay_price' => 'float', 'vr_indate' => 'integer', 'refund_lock' => 'integer', 'vr_invalid_refund' => 'integer'];
}