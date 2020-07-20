<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property int $shop_id 
 * @property int $prom_id 
 * @property int $prom_tag 
 * @property string $prom_title 
 * @property string $goods_sn 
 * @property string $goods_name 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $is_del 
 */
class ActivityGoods2 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity_goods_2';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'prom_id' => 'integer', 'prom_tag' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'is_del' => 'integer'];
}