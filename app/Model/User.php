<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $user_id 
 * @property int $store_id 
 * @property int $shop_id 
 * @property string $avatar 
 * @property int $platform 
 * @property string $nick_name 
 * @property string $realname 
 * @property string $email 
 * @property string $password 
 * @property int $sex 
 * @property int $birthday 
 * @property float $user_money 
 * @property int $commission 
 * @property int $freeze_commission 
 * @property int $total_commission 
 * @property int $reg_time 
 * @property int $last_login 
 * @property string $last_ip 
 * @property string $qq 
 * @property string $mobile 
 * @property string $member_id 
 * @property string $openid 
 * @property string $unionid 
 * @property string $ali_user_id 
 * @property string $collection_store 
 * @property int $bee_id 
 * @property-read \App\Model\Member $member
 */
class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
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
    protected $casts = ['user_id' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'platform' => 'integer', 'sex' => 'integer', 'birthday' => 'integer', 'user_money' => 'float', 'commission' => 'integer', 'freeze_commission' => 'integer', 'total_commission' => 'integer', 'reg_time' => 'integer', 'last_login' => 'integer', 'bee_id' => 'integer'];
    public $timestamps = false;
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
}