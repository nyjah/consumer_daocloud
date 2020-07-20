<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 
 * @property string $to_user_name 
 * @property string $from_user_name 
 * @property string $union_id 
 * @property int $store_id 
 * @property int $shop_id 
 * @property string $card_id 
 * @property int $market_type 
 * @property string $user_card_code 
 * @property string $old_user_card_code 
 * @property string $friend_user_name 
 * @property int $Is_give_by_friend 
 * @property string $outer_str 
 * @property int $status 
 * @property int $create_time 
 */
class WxVoucherUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wx_voucher_users';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'market_type' => 'integer', 'Is_give_by_friend' => 'integer', 'status' => 'integer', 'create_time' => 'integer'];
}