<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $phone_number 
 * @property string $phone_code 
 * @property int $binding_field 
 * @property int $valid_time 
 * @property \Carbon\Carbon $created_at 
 */
class PhoneDatum extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'phone_data';
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
    protected $casts = ['id' => 'integer', 'binding_field' => 'integer', 'valid_time' => 'integer', 'created_at' => 'datetime'];
}