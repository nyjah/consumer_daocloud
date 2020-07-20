<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $store_id 
 * @property string $area_id 
 */
class OffpayArea extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'offpay_area';
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