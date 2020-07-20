<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $comment_id 
 * @property int $goods_id 
 * @property int $order_id 
 * @property int $store_id 
 * @property int $user_id 
 * @property string $content 
 * @property int $add_time 
 * @property string $ip_address 
 * @property int $is_show 
 * @property string $img 
 * @property string $spec_key_name 
 * @property float $goods_rank 
 * @property int $zan_num 
 * @property string $zan_userid 
 * @property int $reply_num 
 * @property int $is_anonymous 
 * @property string $impression 
 * @property int $deleted 
 * @property int $parent_id 
 */
class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comment';
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
    protected $casts = ['comment_id' => 'integer', 'goods_id' => 'integer', 'order_id' => 'integer', 'store_id' => 'integer', 'user_id' => 'integer', 'add_time' => 'integer', 'is_show' => 'integer', 'goods_rank' => 'float', 'zan_num' => 'integer', 'reply_num' => 'integer', 'is_anonymous' => 'integer', 'deleted' => 'integer', 'parent_id' => 'integer'];
}