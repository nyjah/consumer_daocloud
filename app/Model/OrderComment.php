<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $order_commemt_id 
 * @property int $order_id 
 * @property int $store_id 
 * @property int $user_id 
 * @property float $describe_score 
 * @property float $seller_score 
 * @property float $logistics_score 
 * @property int $commemt_time 
 * @property int $deleted 
 */
class OrderComment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_comment';
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
    protected $casts = ['order_commemt_id' => 'integer', 'order_id' => 'integer', 'store_id' => 'integer', 'user_id' => 'integer', 'describe_score' => 'float', 'seller_score' => 'float', 'logistics_score' => 'float', 'commemt_time' => 'integer', 'deleted' => 'integer'];
}