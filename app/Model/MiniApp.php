<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $app_id 
 * @property string $store_id 
 * @property string $app_auth_code 
 * @property int $appt_auth_code_update_time 
 * @property int $client_type 
 */
class MiniApp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mini_app';
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
    protected $casts = ['id' => 'integer', 'appt_auth_code_update_time' => 'integer', 'client_type' => 'integer'];
}