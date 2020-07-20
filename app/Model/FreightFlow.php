<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $seller_id 
 * @property int $shop_id 
 * @property string $order_sn 
 * @property int $type 
 * @property \Carbon\Carbon $created_at 
 * @property float $freight 
 * @property int $third_company_id 
 */
class FreightFlow extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'freight_flow';
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
    protected $casts = ['id' => 'integer', 'seller_id' => 'integer', 'shop_id' => 'integer', 'type' => 'integer', 'created_at' => 'datetime', 'freight' => 'float', 'third_company_id' => 'integer'];
}