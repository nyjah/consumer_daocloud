<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $action_id 
 * @property int $order_id 
 * @property string $action_user 
 * @property int $order_status 
 * @property int $pay_status 
 * @property string $action_note 
 * @property int $log_time 
 * @property string $status_desc 
 * @property int $user_type 
 * @property int $shop_id 
 */
class OrderAction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_action';
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
    protected $casts = ['action_id' => 'integer', 'order_id' => 'integer', 'order_status' => 'integer', 'pay_status' => 'integer', 'log_time' => 'integer', 'user_type' => 'integer', 'shop_id' => 'integer'];
}