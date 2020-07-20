<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 
 * @property int $send_tpl_id 
 * @property int $store_id 
 * @property int $update_time 
 */
class Transport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transport';
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
    protected $casts = ['id' => 'integer', 'send_tpl_id' => 'integer', 'store_id' => 'integer', 'update_time' => 'integer'];
}