<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 
 * @property int $shop_id 
 * @property int $type 
 * @property int $store_id 
 * @property string $content 
 * @property int $enable 
 * @property int $deleted 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $create_time 
 * @property int $update_time 
 */
class ViewModule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'view_module';
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
    protected $casts = ['id' => 'integer', 'shop_id' => 'integer', 'type' => 'integer', 'store_id' => 'integer', 'enable' => 'integer', 'deleted' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer'];
}