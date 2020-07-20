<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $wm_id 
 * @property int $jpeg_quality 
 * @property string $wm_image_name 
 * @property int $wm_image_pos 
 * @property int $wm_image_transition 
 * @property string $wm_text 
 * @property int $wm_text_size 
 * @property int $wm_text_angle 
 * @property int $wm_text_pos 
 * @property string $wm_text_font 
 * @property string $wm_text_color 
 * @property int $wm_is_open 
 * @property int $store_id 
 */
class StoreWatermark extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_watermark';
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
    protected $casts = ['wm_id' => 'integer', 'jpeg_quality' => 'integer', 'wm_image_pos' => 'integer', 'wm_image_transition' => 'integer', 'wm_text_size' => 'integer', 'wm_text_angle' => 'integer', 'wm_text_pos' => 'integer', 'wm_is_open' => 'integer', 'store_id' => 'integer'];
}