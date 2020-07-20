<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $marketing_id 
 * @property string $goods_sn 
 * @property string $goods_name 
 * @property int $sell_num 
 * @property int $max_sell_num 
 * @property int $max_user_sell_num 
 * @property float $origin_price 
 * @property int $sort 
 * @property int $deleted 
 * @property int $original_sync 
 * @property int $update_time 
 * @property int $create_time 
 */
class MarketingGood extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketing_goods';
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
    protected $casts = ['id' => 'integer', 'marketing_id' => 'integer', 'sell_num' => 'integer', 'max_sell_num' => 'integer', 'max_user_sell_num' => 'integer', 'origin_price' => 'float', 'sort' => 'integer', 'deleted' => 'integer', 'original_sync' => 'integer', 'update_time' => 'integer', 'create_time' => 'integer'];
}