<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $sec_kill_id 
 * @property int $goods_id 
 * @property string $goods_sn 
 * @property int $sku_id 
 * @property int $goods_start_num 
 * @property int $goods_end_num 
 * @property int $goods_kill_num 
 * @property float $kill_price 
 * @property int $fake_data 
 * @property int $max_fake_data 
 * @property int $deleted 
 * @property int $sort 
 * @property int $max_user_kill 
 * @property int $max_kill 
 * @property int $original_sync 
 * @property int $update_time 
 * @property int $create_time 
 */
class SecKillGood extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sec_kill_goods';
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
    protected $casts = ['id' => 'integer', 'sec_kill_id' => 'integer', 'goods_id' => 'integer', 'sku_id' => 'integer', 'goods_start_num' => 'integer', 'goods_end_num' => 'integer', 'goods_kill_num' => 'integer', 'kill_price' => 'float', 'fake_data' => 'integer', 'max_fake_data' => 'integer', 'deleted' => 'integer', 'sort' => 'integer', 'max_user_kill' => 'integer', 'max_kill' => 'integer', 'original_sync' => 'integer', 'update_time' => 'integer', 'create_time' => 'integer'];
}