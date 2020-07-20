<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $expose_subject_id 
 * @property string $expose_subject_content 
 * @property int $expose_subject_type_id 
 * @property string $expose_subject_type_name 
 * @property int $expose_subject_state 
 */
class ExposeSubject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expose_subject';
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
    protected $casts = ['expose_subject_id' => 'integer', 'expose_subject_type_id' => 'integer', 'expose_subject_state' => 'integer'];
}