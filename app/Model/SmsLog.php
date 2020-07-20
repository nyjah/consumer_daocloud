<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $shop_id 
 * @property string $sms_id 
 * @property float $cost 
 * @property string $mobile 
 * @property int $add_time 
 * @property string $code 
 * @property int $status 
 * @property string $msg 
 * @property int $scene 
 * @property string $error_msg 
 */
class SmsLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sms_log';
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
    protected $casts = ['id' => 'integer', 'shop_id' => 'integer', 'cost' => 'float', 'add_time' => 'integer', 'status' => 'integer', 'scene' => 'integer'];
}