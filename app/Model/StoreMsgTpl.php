<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property string $smt_code 
 * @property string $smt_name 
 * @property int $smt_message_switch 
 * @property string $smt_message_content 
 * @property int $smt_message_forced 
 * @property int $smt_short_switch 
 * @property string $smt_short_content 
 * @property int $smt_short_forced 
 * @property int $smt_mail_switch 
 * @property string $smt_mail_subject 
 * @property string $smt_mail_content 
 * @property int $smt_mail_forced 
 */
class StoreMsgTpl extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_msg_tpl';
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
    protected $casts = ['smt_message_switch' => 'integer', 'smt_message_forced' => 'integer', 'smt_short_switch' => 'integer', 'smt_short_forced' => 'integer', 'smt_mail_switch' => 'integer', 'smt_mail_forced' => 'integer'];
}