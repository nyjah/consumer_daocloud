<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $talk_id 
 * @property int $complain_id 
 * @property int $talk_member_id 
 * @property string $talk_member_name 
 * @property string $talk_member_type 
 * @property string $talk_content 
 * @property int $talk_state 
 * @property int $talk_admin 
 * @property int $talk_time 
 */
class ComplainTalk extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'complain_talk';
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
    protected $casts = ['talk_id' => 'integer', 'complain_id' => 'integer', 'talk_member_id' => 'integer', 'talk_state' => 'integer', 'talk_admin' => 'integer', 'talk_time' => 'integer'];
}