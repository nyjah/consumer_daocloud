<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $log_id 
 * @property int $store_id 
 * @property float $store_money 
 * @property float $pending_money 
 * @property int $change_time 
 * @property string $desc 
 * @property string $order_sn 
 * @property int $order_id 
 */
class AccountLogStore extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'account_log_store';
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
    protected $casts = ['log_id' => 'integer', 'store_id' => 'integer', 'store_money' => 'float', 'pending_money' => 'float', 'change_time' => 'integer', 'order_id' => 'integer'];
}