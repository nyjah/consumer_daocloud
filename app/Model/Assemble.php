<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $assemble_id 
 * @property int $assemble_goods_id 
 * @property int $leader_assemble_id 
 * @property int $order_id 
 * @property int $shop_id 
 * @property int $goods_id 
 * @property int $leader_id 
 * @property int $user_id 
 * @property float $assemble_price 
 * @property float $assemble_leader_price 
 * @property int $is_has_assemble 
 * @property int $create_time 
 * @property int $end_time 
 * @property int $from_user_id 
 */
class Assemble extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assemble';
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
    protected $casts = ['assemble_id' => 'integer', 'assemble_goods_id' => 'integer', 'leader_assemble_id' => 'integer', 'order_id' => 'integer', 'shop_id' => 'integer', 'goods_id' => 'integer', 'leader_id' => 'integer', 'user_id' => 'integer', 'assemble_price' => 'float', 'assemble_leader_price' => 'float', 'is_has_assemble' => 'integer', 'create_time' => 'integer', 'end_time' => 'integer', 'from_user_id' => 'integer'];
}