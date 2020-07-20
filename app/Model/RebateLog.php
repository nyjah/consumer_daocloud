<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property int $buy_user_id 
 * @property string $nickname 
 * @property string $order_sn 
 * @property int $order_id 
 * @property float $goods_price 
 * @property float $money 
 * @property int $level 
 * @property int $create_time 
 * @property int $confirm 
 * @property int $status 
 * @property int $confirm_time 
 * @property string $remark 
 * @property int $store_id 
 */
class RebateLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rebate_log';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'buy_user_id' => 'integer', 'order_id' => 'integer', 'goods_price' => 'float', 'money' => 'float', 'level' => 'integer', 'create_time' => 'integer', 'confirm' => 'integer', 'status' => 'integer', 'confirm_time' => 'integer', 'store_id' => 'integer'];
}