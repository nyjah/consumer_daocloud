<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $block_id 
 * @property int $decoration_id 
 * @property int $store_id 
 * @property string $block_layout 
 * @property string $block_content 
 * @property string $block_module_type 
 * @property int $block_full_width 
 * @property int $block_sort 
 */
class StoreDecorationBlock extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_decoration_block';
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
    protected $casts = ['block_id' => 'integer', 'decoration_id' => 'integer', 'store_id' => 'integer', 'block_full_width' => 'integer', 'block_sort' => 'integer'];
}