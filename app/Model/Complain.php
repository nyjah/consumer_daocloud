<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $complain_id 
 * @property int $order_id 
 * @property int $order_goods_id 
 * @property int $user_id 
 * @property string $user_name 
 * @property string $user_contact 
 * @property int $store_id 
 * @property string $store_name 
 * @property string $complain_subject_name 
 * @property int $complain_subject_id 
 * @property string $complain_content 
 * @property string $complain_pic 
 * @property int $complain_time 
 * @property int $complain_handle_time 
 * @property int $complain_handle_admin_id 
 * @property string $appeal_msg 
 * @property int $appeal_time 
 * @property string $appeal_pic 
 * @property string $final_handle_msg 
 * @property int $final_handle_time 
 * @property int $final_handle_admin_id 
 * @property int $complain_state 
 * @property int $user_handle_time 
 */
class Complain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'complain';
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
    protected $casts = ['complain_id' => 'integer', 'order_id' => 'integer', 'order_goods_id' => 'integer', 'user_id' => 'integer', 'store_id' => 'integer', 'complain_subject_id' => 'integer', 'complain_time' => 'integer', 'complain_handle_time' => 'integer', 'complain_handle_admin_id' => 'integer', 'appeal_time' => 'integer', 'final_handle_time' => 'integer', 'final_handle_admin_id' => 'integer', 'complain_state' => 'integer', 'user_handle_time' => 'integer'];
}