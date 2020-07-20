<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $shops_id 
 * @property int $template_id 
 */
class TemplateShop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'template_shops';
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
    protected $casts = ['shops_id' => 'integer', 'template_id' => 'integer'];
}