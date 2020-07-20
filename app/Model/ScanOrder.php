<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $bee_id 
 * @property int $uid 
 * @property int $new_order_id 
 * @property int $rebuy_order_id 
 * @property string $old_order 
 * @property int $platform 
 * @property int $scan_time 
 */
class ScanOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'scan_order';
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
    protected $casts = ['id' => 'integer', 'bee_id' => 'integer', 'uid' => 'integer', 'new_order_id' => 'integer', 'rebuy_order_id' => 'integer', 'platform' => 'integer', 'scan_time' => 'integer'];
}