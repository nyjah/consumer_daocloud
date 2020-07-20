<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 
 * @property string $wxname 
 * @property string $aeskey 
 * @property int $encode 
 * @property string $appid 
 * @property string $appsecret 
 * @property string $wxid 
 * @property string $weixin 
 * @property string $headerpic 
 * @property string $token 
 * @property string $w_token 
 * @property int $create_time 
 * @property int $updatetime 
 * @property string $tplcontentid 
 * @property string $share_ticket 
 * @property string $share_dated 
 * @property string $authorizer_access_token 
 * @property string $authorizer_refresh_token 
 * @property string $authorizer_expires 
 * @property int $type 
 * @property string $web_access_token 
 * @property string $web_refresh_token 
 * @property int $web_expires 
 * @property string $qr 
 * @property string $menu_config 
 * @property int $wait_access 
 */
class WxUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wx_user';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'encode' => 'integer', 'create_time' => 'integer', 'updatetime' => 'integer', 'type' => 'integer', 'web_expires' => 'integer', 'wait_access' => 'integer'];
}