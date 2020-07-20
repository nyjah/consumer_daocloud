<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property string $title 
 * @property int $valid_order_type 
 * @property int $valid_order_val 
 * @property int $valid_click_type 
 * @property int $valid_click_val 
 * @property int $create_time 
 * @property int $update_time 
 */
class CommissionRule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'commission_rule';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'valid_order_type' => 'integer', 'valid_order_val' => 'integer', 'valid_click_type' => 'integer', 'valid_click_val' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer'];
}