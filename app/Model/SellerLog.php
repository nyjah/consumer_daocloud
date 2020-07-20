<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $log_id 
 * @property string $log_content 
 * @property int $log_time 
 * @property int $log_seller_id 
 * @property string $log_seller_name 
 * @property int $log_store_id 
 * @property string $log_seller_ip 
 * @property string $log_url 
 * @property int $log_state 
 */
class SellerLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seller_log';
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
    protected $casts = ['log_id' => 'integer', 'log_time' => 'integer', 'log_seller_id' => 'integer', 'log_store_id' => 'integer', 'log_state' => 'integer'];
}