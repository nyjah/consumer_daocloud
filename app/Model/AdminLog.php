<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $log_id 
 * @property int $admin_id 
 * @property string $log_info 
 * @property string $log_ip 
 * @property string $log_url 
 * @property int $log_time 
 * @property int $log_type 
 */
class AdminLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_log';
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
    protected $casts = ['log_id' => 'integer', 'admin_id' => 'integer', 'log_time' => 'integer', 'log_type' => 'integer'];
}