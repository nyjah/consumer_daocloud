<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $admin_id 
 * @property int $create_time 
 * @property int $module 
 * @property int $module_id 
 * @property int $finished 
 * @property int $start_time 
 * @property int $end_time 
 */
class ShortMsgLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'short_msg_log';
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
    protected $casts = ['id' => 'integer', 'admin_id' => 'integer', 'create_time' => 'integer', 'module' => 'integer', 'module_id' => 'integer', 'finished' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer'];
}