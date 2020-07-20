<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property int $marketing_id 
 * @property int $order_id 
 * @property int $store_id 
 * @property int $shops_id 
 * @property int $deleted 
 * @property int $create_time 
 */
class UserSolitaire extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_solitaire';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'marketing_id' => 'integer', 'order_id' => 'integer', 'store_id' => 'integer', 'shops_id' => 'integer', 'deleted' => 'integer', 'create_time' => 'integer'];
}