<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $decoration_id 
 * @property string $decoration_name 
 * @property int $store_id 
 * @property string $decoration_setting 
 * @property string $decoration_nav 
 * @property string $decoration_banner 
 */
class StoreDecoration extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_decoration';
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
    protected $casts = ['decoration_id' => 'integer', 'store_id' => 'integer'];
}