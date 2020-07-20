<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $expose_type_id 
 * @property string $expose_type_name 
 * @property string $expose_type_desc 
 * @property int $expose_type_state 
 */
class ExposeType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expose_type';
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
    protected $casts = ['expose_type_id' => 'integer', 'expose_type_state' => 'integer'];
}