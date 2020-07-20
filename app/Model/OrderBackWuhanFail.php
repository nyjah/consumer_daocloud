<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $order_sn 
 * @property int $event_type 
 * @property int $is_refund 
 * @property string $res 
 * @property int $ts 
 */
class OrderBackWuhanFail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_back_wuhan_fail';
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
    protected $casts = ['id' => 'integer', 'event_type' => 'integer', 'is_refund' => 'integer', 'ts' => 'integer'];
}