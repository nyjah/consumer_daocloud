<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $sms_id 
 * @property string $nickname 
 * @property string $phone 
 * @property string $type 
 * @property int $cost 
 * @property string $text 
 * @property int $create_time 
 */
class Sms extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sms';
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
    protected $casts = ['id' => 'integer', 'cost' => 'integer', 'create_time' => 'integer'];
}