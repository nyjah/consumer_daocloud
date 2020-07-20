<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 
 * @property string $template_id 
 * @property int $create_time 
 * @property int $store_id 
 * @property string $prefix 
 * @property int $num_len 
 * @property string $logo_id 
 * @property string $background_id 
 */
class AliMarketCardTemplate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ali_market_card_template';
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
    protected $casts = ['id' => 'integer', 'create_time' => 'integer', 'store_id' => 'integer', 'num_len' => 'integer'];
}