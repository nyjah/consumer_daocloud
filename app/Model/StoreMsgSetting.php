<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property string $smt_code 
 * @property int $store_id 
 * @property int $sms_message_switch 
 * @property int $sms_short_switch 
 * @property int $sms_mail_switch 
 * @property string $sms_short_number 
 * @property string $sms_mail_number 
 */
class StoreMsgSetting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_msg_setting';
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
    protected $casts = ['store_id' => 'integer', 'sms_message_switch' => 'integer', 'sms_short_switch' => 'integer', 'sms_mail_switch' => 'integer'];
}