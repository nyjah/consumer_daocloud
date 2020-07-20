<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $order_id 
 * @property string $order_sn 
 * @property int $store_id 
 * @property int $shops_id 
 * @property int $cash_fee 
 * @property int $refund_fee 
 */
class OrderCheck extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_check';
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
    protected $casts = ['id' => 'integer', 'order_id' => 'integer', 'store_id' => 'integer', 'shops_id' => 'integer', 'cash_fee' => 'integer', 'refund_fee' => 'integer'];
}