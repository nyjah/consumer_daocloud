<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 
 * @property string $logo 
 * @property string $desc 
 * @property string $url 
 * @property int $sort 
 * @property string $cat_name 
 * @property int $cat_id1 
 * @property int $cat_id2 
 * @property int $cat_id3 
 * @property int $is_hot 
 * @property int $store_id 
 * @property int $status 
 */
class Brand extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'brand';
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
    protected $casts = ['id' => 'integer', 'sort' => 'integer', 'cat_id1' => 'integer', 'cat_id2' => 'integer', 'cat_id3' => 'integer', 'is_hot' => 'integer', 'store_id' => 'integer', 'status' => 'integer'];
}