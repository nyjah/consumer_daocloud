<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $roof_id 
 * @property string $prom_id_list 
 * @property string $table_name 
 * @property int $ts 
 */
class PromRoof extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prom_roof';
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
    protected $casts = ['roof_id' => 'integer', 'ts' => 'integer'];
}