<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $cat_id 
 * @property string $cat_name 
 * @property int $cat_type 
 * @property int $parent_id 
 * @property int $show_in_nav 
 * @property int $sort_order 
 * @property string $cat_desc 
 * @property string $keywords 
 * @property string $cat_alias 
 */
class ArticleCat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article_cat';
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
    protected $casts = ['cat_id' => 'integer', 'cat_type' => 'integer', 'parent_id' => 'integer', 'show_in_nav' => 'integer', 'sort_order' => 'integer'];
}