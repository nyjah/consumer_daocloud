<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $sales_rule_id 
 * @property int $store_id 
 * @property string $goods_sn 
 * @property float $promotion_price 
 * @property float $deposit 
 * @property int $is_top 
 * @property int $created_time 
 * @property int $goods_limit_num 
 * @property int $person_limit_num 
 */
class Sale extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales';
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
    protected $casts = ['id' => 'integer', 'sales_rule_id' => 'integer', 'store_id' => 'integer', 'promotion_price' => 'float', 'deposit' => 'float', 'is_top' => 'integer', 'created_time' => 'integer', 'goods_limit_num' => 'integer', 'person_limit_num' => 'integer'];
}