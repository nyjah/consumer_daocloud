<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $admin_id 
 * @property string $user_name 
 * @property string $email 
 * @property string $password 
 * @property string $ec_salt 
 * @property int $add_time 
 * @property int $last_login 
 * @property string $last_ip 
 * @property string $nav_list 
 * @property string $lang_type 
 * @property string $paypwd 
 * @property int $suppliers_id 
 * @property string $todolist 
 * @property int $role_id 
 */
class Admin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin';
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
    protected $casts = ['admin_id' => 'integer', 'add_time' => 'integer', 'last_login' => 'integer', 'suppliers_id' => 'integer', 'role_id' => 'integer'];
}