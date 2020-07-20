<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $shop_id 
 * @property string $title 
 * @property string $content 
 * @property int $create_time 
 * @property int $update_time 
 * @property int $start_time 
 * @property int $end_time 
 * @property int $enable 
 * @property int $deleted 
 * @property int $creater 
 */
class ShopTemplate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shop_template';
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
    protected $casts = ['id' => 'integer', 'shop_id' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'enable' => 'integer', 'deleted' => 'integer', 'creater' => 'integer'];
}