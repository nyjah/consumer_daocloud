<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 
 * @property int $status 
 * @property string $prom_img 
 * @property int $recommend 
 * @property int $ad_id 
 * @property int $store_id 
 * @property string $color 
 * @property string $shop_ids 
 * @property int $is_release 
 * @property int $create_time 
 */
class Secondary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'secondary';
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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'recommend' => 'integer', 'ad_id' => 'integer', 'store_id' => 'integer', 'is_release' => 'integer', 'create_time' => 'integer'];
}