<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property int $shop_id 
 * @property string $title 
 * @property int $assemble_effective_time 
 * @property int $near_end_time 
 * @property int $assemble_person_num 
 * @property int $delivery_type 
 * @property int $delivery_fee_duty_person 
 * @property int $recommend_goods 
 * @property int $commission_id 
 * @property int $is_anonymous_assemble 
 * @property int $is_sync_erp 
 * @property string $assemble_goods_list 
 * @property int $is_release_assemble 
 * @property int $create_time 
 * @property int $start_time 
 * @property int $end_time 
 */
class AssembleGood extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assemble_goods';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'shop_id' => 'integer', 'assemble_effective_time' => 'integer', 'near_end_time' => 'integer', 'assemble_person_num' => 'integer', 'delivery_type' => 'integer', 'delivery_fee_duty_person' => 'integer', 'recommend_goods' => 'integer', 'commission_id' => 'integer', 'is_anonymous_assemble' => 'integer', 'is_sync_erp' => 'integer', 'is_release_assemble' => 'integer', 'create_time' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer'];
}