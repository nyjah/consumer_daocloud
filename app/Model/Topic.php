<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $topic_id 
 * @property string $topic_title 
 * @property string $topic_image 
 * @property string $topic_background_color 
 * @property string $topic_background 
 * @property string $topic_content 
 * @property string $topic_repeat 
 * @property int $topic_state 
 * @property int $topic_margin_top 
 * @property int $ctime 
 */
class Topic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'topic';
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
    protected $casts = ['topic_id' => 'integer', 'topic_state' => 'integer', 'topic_margin_top' => 'integer', 'ctime' => 'integer'];
}