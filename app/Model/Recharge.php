<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $order_id 
 * @property int $user_id 
 * @property string $nickname 
 * @property string $order_sn 
 * @property float $account 
 * @property int $ctime 
 * @property int $pay_time 
 * @property string $pay_code 
 * @property string $pay_name 
 * @property int $pay_status 
 */
class Recharge extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recharge';
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
    protected $casts = ['order_id' => 'integer', 'user_id' => 'integer', 'account' => 'float', 'ctime' => 'integer', 'pay_time' => 'integer', 'pay_status' => 'integer'];
}