<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $message_id 
 * @property int $admin_id 
 * @property int $seller_id 
 * @property string $message 
 * @property int $type 
 * @property int $category 
 * @property int $send_time 
 */
class Message extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'message';
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
    protected $casts = ['message_id' => 'integer', 'admin_id' => 'integer', 'seller_id' => 'integer', 'type' => 'integer', 'category' => 'integer', 'send_time' => 'integer'];
}