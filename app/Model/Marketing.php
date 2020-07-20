<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 
 * @property int $release 
 * @property int $release_time 
 * @property int $commission_id 
 * @property int $short_msg 
 * @property int $sync 
 * @property int $deleted 
 * @property int $create_time 
 * @property int $update_time 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $notice_state 
 * @property int $finished 
 * @property int $creater_id 
 * @property int $store_id 
 * @property int $module 
 * @property int $sort 
 */
class Marketing extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketing';
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
    protected $casts = ['id' => 'integer', 'release' => 'integer', 'release_time' => 'integer', 'commission_id' => 'integer', 'short_msg' => 'integer', 'sync' => 'integer', 'deleted' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'notice_state' => 'integer', 'finished' => 'integer', 'creater_id' => 'integer', 'store_id' => 'integer', 'module' => 'integer', 'sort' => 'integer'];
}