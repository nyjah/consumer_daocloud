<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $sn_id 
 * @property string $sn_title 
 * @property int $sn_store_id 
 * @property string $sn_content 
 * @property int $sn_sort 
 * @property int $sn_is_show 
 * @property int $sn_add_time 
 * @property string $sn_url 
 * @property int $sn_new_open 
 */
class StoreNavigation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_navigation';
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
    protected $casts = ['sn_id' => 'integer', 'sn_store_id' => 'integer', 'sn_sort' => 'integer', 'sn_is_show' => 'integer', 'sn_add_time' => 'integer', 'sn_new_open' => 'integer'];
}