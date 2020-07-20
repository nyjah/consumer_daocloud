<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $seller_id 
 * @property string $pwd 
 * @property int $parent_id 
 * @property int $industry 
 * @property string $seller_name 
 * @property string $ali_acesstoken 
 * @property int $del 
 * @property int $group_id 
 * @property int $store_id 
 * @property int $is_admin 
 * @property string $seller_quicklink 
 * @property int $last_login_time 
 * @property int $enabled 
 * @property int $expire_date 
 * @property int $add_time 
 * @property int $shops_id 
 * @property string $logo 
 * @property string $name 
 * @property float $freight_balance 
 * @property int $is_open 
 * @property string $goods_tag 
 * @property string $authorization 
 * @property int $auth_group 
 */
class Seller extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seller';
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
    protected $casts = ['seller_id' => 'integer', 'parent_id' => 'integer', 'industry' => 'integer', 'del' => 'integer', 'group_id' => 'integer', 'store_id' => 'integer', 'is_admin' => 'integer', 'last_login_time' => 'integer', 'enabled' => 'integer', 'expire_date' => 'integer', 'add_time' => 'integer', 'shops_id' => 'integer', 'freight_balance' => 'float', 'is_open' => 'integer', 'auth_group' => 'integer'];
}