<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $goods_id 
 * @property string $goods_name 
 * @property string $goods_spec 
 * @property string $order_sn 
 * @property int $store_id 
 * @property int $muid 
 * @property int $stock 
 * @property int $ctime 
 */
class StockLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stock_log';
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
    protected $casts = ['id' => 'integer', 'goods_id' => 'integer', 'store_id' => 'integer', 'muid' => 'integer', 'stock' => 'integer', 'ctime' => 'integer'];
}