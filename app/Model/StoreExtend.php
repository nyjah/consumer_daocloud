<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $store_id 
 * @property string $express 
 * @property string $pricerange 
 * @property string $orderpricerange 
 */
class StoreExtend extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_extend';
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
    protected $casts = ['store_id' => 'integer'];
}