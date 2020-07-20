<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $store_id 
 * @property string $store_name 
 * @property string $seller_name 
 * @property int $sc_id 
 * @property int $open_bee 
 * @property int $store_state 
 * @property int $store_time 
 * @property int $store_end_time 
 * @property string $qr_code_link 
 * @property int $enable_customer_service 
 * @property string $store_qq 
 * @property string $store_presales 
 * @property string $store_aftersales 
 * @property string $store_workingtime 
 * @property string $logo 
 * @property int $deleted 
 * @property int $expire_date 
 * @property int $active_time 
 * @property int $max_shops_num 
 * @property int $shops_expire_date 
 * @property int $fast_refund_time 
 * @property int $Lachine_off 
 * @property string $member_link 
 * @property int $independent 
 * @property string $mind_mch_id 
 * @property string $auth_list 
 */
class Store extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store';
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
    protected $casts = ['store_id' => 'integer', 'sc_id' => 'integer', 'open_bee' => 'integer', 'store_state' => 'integer', 'store_time' => 'integer', 'store_end_time' => 'integer', 'enable_customer_service' => 'integer', 'deleted' => 'integer', 'expire_date' => 'integer', 'active_time' => 'integer', 'max_shops_num' => 'integer', 'shops_expire_date' => 'integer', 'fast_refund_time' => 'integer', 'Lachine_off' => 'integer', 'independent' => 'integer'];
}