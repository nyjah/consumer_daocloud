<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $seller_id 
 * @property int $store_id 
 * @property string $mini_app_audit_id 
 * @property string $mini_app_audit_code 
 * @property string $mini_app_audit_desc 
 * @property string $mini_app_desc 
 * @property string $authorizer_appid 
 * @property string $authorizer_access_token 
 * @property int $authorizer_access_token_expires 
 * @property string $authorizer_refresh_token 
 * @property string $func_info 
 * @property int $auth_type 
 * @property string $authorizer_type 
 * @property string $authorizer_code 
 * @property int $authorizer_code_expires 
 * @property string $mini_app_version 
 */
class StoreWxAuthorize extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_wx_authorize';
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
    protected $casts = ['id' => 'integer', 'seller_id' => 'integer', 'store_id' => 'integer', 'authorizer_access_token_expires' => 'integer', 'auth_type' => 'integer', 'authorizer_code_expires' => 'integer'];
}