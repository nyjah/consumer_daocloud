<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $sg_id 
 * @property string $sg_name 
 * @property int $sg_goods_limit 
 * @property int $sg_album_limit 
 * @property int $sg_space_limit 
 * @property int $sg_template_limit 
 * @property string $sg_template 
 * @property float $sg_price 
 * @property string $sg_description 
 * @property string $sg_function 
 * @property int $sg_sort 
 */
class StoreGrade extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_grade';
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
    protected $casts = ['sg_id' => 'integer', 'sg_goods_limit' => 'integer', 'sg_album_limit' => 'integer', 'sg_space_limit' => 'integer', 'sg_template_limit' => 'integer', 'sg_price' => 'float', 'sg_sort' => 'integer'];
}