<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 
 * @property int $type 
 * @property float $money 
 * @property string $expression 
 * @property string $description 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $status 
 * @property string $group 
 * @property string $prom_img 
 * @property int $store_id 
 * @property int $orderby 
 * @property int $recommend 
 */
class PromOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prom_order';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'money' => 'float', 'start_time' => 'integer', 'end_time' => 'integer', 'status' => 'integer', 'store_id' => 'integer', 'orderby' => 'integer', 'recommend' => 'integer'];
}