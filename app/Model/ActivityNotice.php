<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $form_id 
 * @property string $module 
 * @property int $module_id 
 * @property int $user_id 
 * @property int $sec_kill_good_id 
 * @property int $deleted 
 * @property int $create_time 
 * @property int $deal 
 * @property int $deal_num 
 */
class ActivityNotice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity_notice';
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
    protected $casts = ['id' => 'integer', 'module_id' => 'integer', 'user_id' => 'integer', 'sec_kill_good_id' => 'integer', 'deleted' => 'integer', 'create_time' => 'integer', 'deal' => 'integer', 'deal_num' => 'integer'];
}