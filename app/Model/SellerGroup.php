<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $group_id 
 * @property string $group_name 
 * @property string $act_limits 
 * @property string $smt_limits 
 * @property int $store_id 
 * @property int $shops_id 
 */
class SellerGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seller_group';
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
    protected $casts = ['group_id' => 'integer', 'store_id' => 'integer', 'shops_id' => 'integer'];
}