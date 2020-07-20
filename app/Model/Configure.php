<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $cfg_key 
 * @property string $cfg_value 
 * @property int $parent_id 
 * @property string $title 
 * @property string $description 
 * @property string $ts 
 */
class Configure extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'configure';
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
    protected $casts = ['id' => 'integer', 'parent_id' => 'integer'];
}