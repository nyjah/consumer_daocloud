<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property int $shop_id 
 * @property string $card_id 
 * @property string $title 
 * @property string $goods_img 
 * @property string $goods_sku 
 * @property string $card_type 
 * @property string $code_type 
 * @property string $brand_name 
 * @property int $quantity 
 * @property int $begin_timestamp 
 * @property int $end_timestamp 
 * @property string $time_limit 
 * @property string $logo_url 
 * @property int $reduce_cost 
 * @property int $least_cost 
 * @property string $accept_category 
 * @property string $reject_category 
 * @property string $description 
 * @property int $get_limit 
 * @property int $use_limit 
 * @property string $service_phone 
 * @property string $business_service 
 * @property string $status 
 * @property int $tag 
 * @property int $market_type 
 * @property int $is_show 
 * @property int $create_time 
 * @property int $get_num 
 * @property string $ts 
 * @property int $white_list_status 
 */
class WxVoucherTpl extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wx_voucher_tpl';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'quantity' => 'integer', 'begin_timestamp' => 'integer', 'end_timestamp' => 'integer', 'reduce_cost' => 'integer', 'least_cost' => 'integer', 'get_limit' => 'integer', 'use_limit' => 'integer', 'tag' => 'integer', 'market_type' => 'integer', 'is_show' => 'integer', 'create_time' => 'integer', 'get_num' => 'integer', 'white_list_status' => 'integer'];
}