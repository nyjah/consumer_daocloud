<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $pay_id 
 * @property string $pay_code 
 * @property string $pay_name 
 * @property string $pay_fee 
 * @property string $pay_desc 
 * @property int $pay_order 
 * @property string $pay_config 
 * @property int $enabled 
 * @property int $is_cod 
 * @property int $is_online 
 */
class Payment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment';
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
    protected $casts = ['pay_id' => 'integer', 'pay_order' => 'integer', 'enabled' => 'integer', 'is_cod' => 'integer', 'is_online' => 'integer'];
}