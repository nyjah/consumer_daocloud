<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $seller_id 
 * @property int $store_id 
 * @property string $authorizer_appid 
 * @property string $authorizer_access_token 
 * @property string $authorizer_access_token_expires 
 * @property string $authorizer_refresh_token 
 * @property string $func_info 
 * @property int $is_auth 
 * @property int $update_time 
 * @property int $create_time 
 */
class StoreWechatAuthorizeConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_wechat_authorize_config';
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
    protected $casts = ['id' => 'integer', 'seller_id' => 'integer', 'store_id' => 'integer', 'is_auth' => 'integer', 'update_time' => 'integer', 'create_time' => 'integer'];
}