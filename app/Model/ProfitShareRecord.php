<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $order_sn 
 * @property int $shop_id 
 * @property int $store_id 
 * @property int $order_amount 
 * @property int $profit_amount 
 * @property int $ts 
 */
class ProfitShareRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profit_share_record';
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
    protected $casts = ['id' => 'integer', 'shop_id' => 'integer', 'store_id' => 'integer', 'order_amount' => 'integer', 'profit_amount' => 'integer', 'ts' => 'integer'];
}