<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $secondary_id 
 * @property string $tag_img 
 * @property string $tag_name 
 * @property int $tag_sort 
 * @property string $goods_list 
 * @property int $is_show 
 * @property int $layout 
 * @property int $step_size 
 * @property int $create_time 
 */
class SecondaryTag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'secondary_tag';
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
    protected $casts = ['id' => 'integer', 'secondary_id' => 'integer', 'tag_sort' => 'integer', 'is_show' => 'integer', 'layout' => 'integer', 'step_size' => 'integer', 'create_time' => 'integer'];
}