<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $reply_id 
 * @property int $comment_id 
 * @property int $parent_id 
 * @property string $content 
 * @property string $user_name 
 * @property string $to_name 
 * @property int $deleted 
 * @property int $reply_time 
 */
class Reply extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reply';
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
    protected $casts = ['reply_id' => 'integer', 'comment_id' => 'integer', 'parent_id' => 'integer', 'deleted' => 'integer', 'reply_time' => 'integer'];
}