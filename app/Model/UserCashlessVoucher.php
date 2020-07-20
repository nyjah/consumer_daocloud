<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property string $voucher_id 
 * @property string $ali_appid 
 * @property int $store_id 
 * @property int $shops_id 
 * @property string $template_id 
 * @property int $status 
 * @property int $type 
 * @property int $create_time 
 * @property int $update_time 
 */
class UserCashlessVoucher extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_cashless_voucher';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'store_id' => 'integer', 'shops_id' => 'integer', 'status' => 'integer', 'type' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer'];
}