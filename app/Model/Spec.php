<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 
 * @property int $order 
 * @property int $search_index 
 * @property int $cat_id1 
 * @property int $cat_id2 
 * @property int $cat_id3 
 */
class Spec extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'spec';
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
    protected $casts = ['id' => 'integer', 'order' => 'integer', 'search_index' => 'integer', 'cat_id1' => 'integer', 'cat_id2' => 'integer', 'cat_id3' => 'integer'];
}