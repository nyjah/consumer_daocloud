<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $order_id 
 * @property string $out_refund_no 
 * @property string $goods 
 * @property int $type 
 * @property int $reason 
 * @property string $describe 
 * @property string $wx_sign 
 * @property string $imgs 
 * @property int $status 
 * @property string $refuse_remark 
 * @property int $user_id 
 * @property int $shops_id 
 * @property int $store_id 
 * @property string $consignee 
 * @property string $mobile 
 * @property float $refund 
 * @property float $should_refund 
 * @property float $break_contract 
 * @property float $package_price 
 * @property float $delivery_price 
 * @property int $refund_type 
 * @property int $full_refund 
 * @property int $order_type 
 * @property string $refund_mark 
 * @property int $apply_way 
 * @property int $refundtime 
 * @property int $addtime 
 * @property int $passtime 
 * @property int $rejecttime 
 * @property int $canceltime 
 * @property int $update_time 
 * @property int $independent 
 */
class ReturnGood extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'return_goods';
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
    protected $casts = ['id' => 'integer', 'order_id' => 'integer', 'type' => 'integer', 'reason' => 'integer', 'status' => 'integer', 'user_id' => 'integer', 'shops_id' => 'integer', 'store_id' => 'integer', 'refund' => 'float', 'should_refund' => 'float', 'break_contract' => 'float', 'package_price' => 'float', 'delivery_price' => 'float', 'refund_type' => 'integer', 'full_refund' => 'integer', 'order_type' => 'integer', 'apply_way' => 'integer', 'refundtime' => 'integer', 'addtime' => 'integer', 'passtime' => 'integer', 'rejecttime' => 'integer', 'canceltime' => 'integer', 'update_time' => 'integer', 'independent' => 'integer'];
}