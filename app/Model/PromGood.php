<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 
 * @property int $type 
 * @property string $expression 
 * @property string $description 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $status 
 * @property string $group 
 * @property int $orderby 
 * @property string $prom_img 
 * @property int $recommend 
 * @property int $is_del 
 * @property int $tag 
 * @property int $bind_ad 
 * @property int $store_id 
 * @property int $shop_id 
 * @property int $commission_id 
 * @property int $is_add_commission 
 * @property int $is_sync_erp 
 * @property int $is_send_msg 
 * @property int $is_select_one 
 * @property string $prom_goods_list 
 * @property int $is_release_prom 
 * @property int $create_time 
 * @property int $layout 
 * @property int $step_size 
 * @property int $send_start_day 
 * @property int $send_end_day 
 * @property string $send_time 
 */
class PromGood extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prom_goods';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'status' => 'integer', 'orderby' => 'integer', 'recommend' => 'integer', 'is_del' => 'integer', 'tag' => 'integer', 'bind_ad' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'commission_id' => 'integer', 'is_add_commission' => 'integer', 'is_sync_erp' => 'integer', 'is_send_msg' => 'integer', 'is_select_one' => 'integer', 'is_release_prom' => 'integer', 'create_time' => 'integer', 'layout' => 'integer', 'step_size' => 'integer', 'send_start_day' => 'integer', 'send_end_day' => 'integer'];
}