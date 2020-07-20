<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $msg_id 
 * @property int $parent_id 
 * @property int $user_id 
 * @property string $user_name 
 * @property string $msg_title 
 * @property int $msg_type 
 * @property int $msg_status 
 * @property string $msg_content 
 * @property int $msg_time 
 * @property string $message_img 
 * @property int $order_id 
 * @property int $msg_area 
 */
class Feedback extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feedback';
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
    protected $casts = ['msg_id' => 'integer', 'parent_id' => 'integer', 'user_id' => 'integer', 'msg_type' => 'integer', 'msg_status' => 'integer', 'msg_time' => 'integer', 'order_id' => 'integer', 'msg_area' => 'integer'];
}