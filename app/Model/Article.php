<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $article_id 
 * @property int $cat_id 
 * @property string $title 
 * @property string $content 
 * @property string $author 
 * @property string $author_email 
 * @property string $keywords 
 * @property int $article_type 
 * @property int $is_open 
 * @property int $add_time 
 * @property string $file_url 
 * @property int $open_type 
 * @property string $link 
 * @property string $description 
 * @property int $click 
 * @property int $publish_time 
 * @property string $thumb 
 */
class Article extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article';
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
    protected $casts = ['article_id' => 'integer', 'cat_id' => 'integer', 'article_type' => 'integer', 'is_open' => 'integer', 'add_time' => 'integer', 'open_type' => 'integer', 'click' => 'integer', 'publish_time' => 'integer'];
}