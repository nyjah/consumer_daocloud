<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property string $code 
 * @property string $name 
 * @property string $version 
 * @property string $author 
 * @property string $config 
 * @property string $config_value 
 * @property string $desc 
 * @property int $status 
 * @property string $type 
 * @property string $icon 
 * @property string $bank_code 
 * @property int $scene 
 */
class Plugin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plugin';
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
    protected $casts = ['status' => 'integer', 'scene' => 'integer'];
}