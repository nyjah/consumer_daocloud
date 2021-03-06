<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $shops_id 
 * @property string $key_words 
 * @property int $priority 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class HotSearchWord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hot_search_words';
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
    protected $casts = ['id' => 'integer', 'shops_id' => 'integer', 'priority' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}