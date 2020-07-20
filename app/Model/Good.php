<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $goods_id 
 * @property int $erp_goods_id 
 * @property string $erp_catgory_code 
 * @property int $seller_id 
 * @property int $store_id 
 * @property int $shop_id 
 * @property int $cat_id 
 * @property int $store_cat_id1 
 * @property int $store_cat_id2 
 * @property string $goods_sn 
 * @property string $goods_name 
 * @property string $sale_unit 
 * @property string $sale_spec 
 * @property int $shelf_life 
 * @property int $brand_id 
 * @property int $store_count 
 * @property int $goods_sales 
 * @property int $comment_count 
 * @property int $weight 
 * @property float $market_price 
 * @property float $shop_price 
 * @property float $cost_price 
 * @property float $discount 
 * @property string $goods_remark 
 * @property string $goods_content 
 * @property string $original_img 
 * @property string $detail_img 
 * @property int $is_on_sale 
 * @property int $on_time 
 * @property int $sort 
 * @property int $is_recommend 
 * @property int $is_new 
 * @property int $is_hot 
 * @property string $prom_tag 
 * @property int $prom_id 
 * @property float $prom_price 
 * @property string $spu 
 * @property string $sku 
 * @property int $sync 
 * @property int $last_update 
 * @property int $deleted 
 * @property string $ts 
 * @property int $false_sales 
 */
class Good extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goods';
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
    protected $casts = ['goods_id' => 'integer', 'erp_goods_id' => 'integer', 'seller_id' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'cat_id' => 'integer', 'store_cat_id1' => 'integer', 'store_cat_id2' => 'integer', 'shelf_life' => 'integer', 'brand_id' => 'integer', 'store_count' => 'integer', 'goods_sales' => 'integer', 'comment_count' => 'integer', 'weight' => 'integer', 'market_price' => 'float', 'shop_price' => 'float', 'cost_price' => 'float', 'discount' => 'float', 'is_on_sale' => 'integer', 'on_time' => 'integer', 'sort' => 'integer', 'is_recommend' => 'integer', 'is_new' => 'integer', 'is_hot' => 'integer', 'prom_id' => 'integer', 'prom_price' => 'float', 'sync' => 'integer', 'last_update' => 'integer', 'deleted' => 'integer', 'false_sales' => 'integer'];
}