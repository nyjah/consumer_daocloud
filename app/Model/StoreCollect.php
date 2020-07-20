<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $log_id 
 * @property int $user_id 
 * @property int $store_id 
 * @property int $add_time 
 * @property string $store_name 
 * @property string $user_name 
 */
class StoreCollect extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_collect';
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
    protected $casts = ['log_id' => 'integer', 'user_id' => 'integer', 'store_id' => 'integer', 'add_time' => 'integer'];
}