<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $rec_id 
 * @property int $user_id 
 * @property int $message_id 
 * @property int $category 
 * @property int $status 
 */
class UserMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_message';
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
    protected $casts = ['rec_id' => 'integer', 'user_id' => 'integer', 'message_id' => 'integer', 'category' => 'integer', 'status' => 'integer'];
}