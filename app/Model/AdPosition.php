<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $position_id 
 * @property string $position_name 
 * @property int $ad_width 
 * @property int $ad_height 
 * @property string $position_desc 
 * @property string $position_style 
 * @property int $is_open 
 */
class AdPosition extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ad_position';
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
    protected $casts = ['position_id' => 'integer', 'ad_width' => 'integer', 'ad_height' => 'integer', 'is_open' => 'integer'];
}