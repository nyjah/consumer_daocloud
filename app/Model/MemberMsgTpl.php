<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property string $mmt_code 
 * @property string $mmt_name 
 * @property int $mmt_message_switch 
 * @property string $mmt_message_content 
 * @property int $mmt_short_switch 
 * @property string $mmt_short_content 
 * @property int $mmt_mail_switch 
 * @property string $mmt_mail_subject 
 * @property string $mmt_mail_content 
 */
class MemberMsgTpl extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member_msg_tpl';
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
    protected $casts = ['mmt_message_switch' => 'integer', 'mmt_short_switch' => 'integer', 'mmt_mail_switch' => 'integer'];
}