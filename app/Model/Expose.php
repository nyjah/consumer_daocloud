<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $expose_id 
 * @property int $expose_user_id 
 * @property string $expose_user_name 
 * @property int $expose_order_id 
 * @property int $expose_goods_id 
 * @property string $expose_goods_name 
 * @property int $expose_type_id 
 * @property string $expose_type_name 
 * @property int $expose_subject_id 
 * @property string $expose_subject_name 
 * @property string $expose_content 
 * @property string $expose_pic 
 * @property int $expose_time 
 * @property int $expose_store_id 
 * @property string $expose_store_name 
 * @property int $expose_state 
 * @property int $expose_handle_type 
 * @property string $expose_handle_msg 
 * @property int $expose_handle_time 
 * @property int $expose_handle_admin_id 
 */
class Expose extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expose';
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
    protected $casts = ['expose_id' => 'integer', 'expose_user_id' => 'integer', 'expose_order_id' => 'integer', 'expose_goods_id' => 'integer', 'expose_type_id' => 'integer', 'expose_subject_id' => 'integer', 'expose_time' => 'integer', 'expose_store_id' => 'integer', 'expose_state' => 'integer', 'expose_handle_type' => 'integer', 'expose_handle_time' => 'integer', 'expose_handle_admin_id' => 'integer'];
}