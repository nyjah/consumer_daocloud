<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $log_id 
 * @property int $user_id 
 * @property float $user_money 
 * @property float $frozen_money 
 * @property int $pay_points 
 * @property int $change_time 
 * @property string $desc 
 * @property string $order_sn 
 * @property int $order_id 
 */
class AccountLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'account_log';
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
    protected $casts = ['log_id' => 'integer', 'user_id' => 'integer', 'user_money' => 'float', 'frozen_money' => 'float', 'pay_points' => 'integer', 'change_time' => 'integer', 'order_id' => 'integer'];
}