<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $m_id 
 * @property int $f_id 
 * @property string $f_name 
 * @property string $f_ip 
 * @property int $t_id 
 * @property string $t_name 
 * @property string $t_msg 
 * @property int $add_time 
 */
class ChatLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'chat_log';
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
    protected $casts = ['m_id' => 'integer', 'f_id' => 'integer', 't_id' => 'integer', 'add_time' => 'integer'];
}