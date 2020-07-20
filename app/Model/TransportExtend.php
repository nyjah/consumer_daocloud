<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $area_id 
 * @property string $top_area_id 
 * @property string $area_name 
 * @property float $sprice 
 * @property int $transport_id 
 * @property string $transport_title 
 */
class TransportExtend extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transport_extend';
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
    protected $casts = ['id' => 'integer', 'sprice' => 'float', 'transport_id' => 'integer'];
}