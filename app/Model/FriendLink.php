<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $link_id 
 * @property string $link_name 
 * @property string $link_url 
 * @property string $link_logo 
 * @property int $orderby 
 * @property int $is_show 
 * @property int $target 
 */
class FriendLink extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'friend_link';
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
    protected $casts = ['link_id' => 'integer', 'orderby' => 'integer', 'is_show' => 'integer', 'target' => 'integer'];
}