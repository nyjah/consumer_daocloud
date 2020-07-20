<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property string $image_url 
 * @property string $image_id 
 * @property int $type 
 * @property int $create_time 
 * @property string $image_name 
 * @property string $local_image_url 
 */
class AliMarketCardImg extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ali_market_card_imgs';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'type' => 'integer', 'create_time' => 'integer'];
}