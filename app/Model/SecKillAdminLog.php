<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $admin_id 
 * @property int $create_time 
 * @property string $action 
 * @property string $note 
 * @property int $module_id 
 * @property int $module 
 */
class SecKillAdminLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sec_kill_admin_log';
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
    protected $casts = ['id' => 'integer', 'admin_id' => 'integer', 'create_time' => 'integer', 'module_id' => 'integer', 'module' => 'integer'];
}