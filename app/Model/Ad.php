<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $ad_id 
 * @property int $pid 
 * @property int $store_id 
 * @property int $media_type 
 * @property string $ad_name 
 * @property string $ad_link 
 * @property string $ad_code 
 * @property int $start_time 
 * @property int $end_time 
 * @property string $link_man 
 * @property string $link_email 
 * @property string $link_phone 
 * @property int $click_count 
 * @property int $enabled 
 * @property int $orderby 
 * @property int $target 
 * @property string $bgcolor 
 * @property int $shop_id 
 * @property int $is_del 
 * @property int $onclick 
 * @property int $fixed 
 * @property int $cases 
 * @property string $space1 
 * @property int $onclick1 
 * @property string $ad_link1 
 * @property string $space2 
 * @property int $onclick2 
 * @property string $ad_link2 
 * @property string $space3 
 * @property int $onclick3 
 * @property string $ad_link3 
 * @property string $space4 
 * @property int $onclick4 
 * @property string $ad_link4 
 */
class Ad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ad';
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
    protected $casts = ['ad_id' => 'integer', 'pid' => 'integer', 'store_id' => 'integer', 'media_type' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'click_count' => 'integer', 'enabled' => 'integer', 'orderby' => 'integer', 'target' => 'integer', 'shop_id' => 'integer', 'is_del' => 'integer', 'onclick' => 'integer', 'fixed' => 'integer', 'cases' => 'integer', 'onclick1' => 'integer', 'onclick2' => 'integer', 'onclick3' => 'integer', 'onclick4' => 'integer'];
}