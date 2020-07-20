<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $tpl_id 
 * @property string $sms_sign 
 * @property string $sms_tpl_code 
 * @property string $tpl_content 
 * @property string $send_scene 
 * @property int $add_time 
 */
class SmsTemplate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sms_template';
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
    protected $casts = ['tpl_id' => 'integer', 'add_time' => 'integer'];
}