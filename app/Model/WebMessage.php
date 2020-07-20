<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $message_id 
 * @property int $message_parent_id 
 * @property int $from_member_id 
 * @property string $to_member_id 
 * @property string $message_title 
 * @property string $message_body 
 * @property string $message_time 
 * @property string $message_update_time 
 * @property int $message_open 
 * @property int $message_state 
 * @property int $message_type 
 * @property string $read_member_id 
 * @property string $del_member_id 
 * @property int $message_ismore 
 * @property string $from_member_name 
 * @property string $to_member_name 
 */
class WebMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_message';
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
    protected $casts = ['message_id' => 'integer', 'message_parent_id' => 'integer', 'from_member_id' => 'integer', 'message_open' => 'integer', 'message_state' => 'integer', 'message_type' => 'integer', 'message_ismore' => 'integer'];
}