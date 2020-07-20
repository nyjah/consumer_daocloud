<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $app_id 
 * @property string $version 
 * @property int $client_type 
 * @property string $mark 
 * @property string $tag 
 * @property int $status 
 * @property string $notify_id 
 * @property int $deleted 
 * @property int $create_time 
 * @property int $update_time 
 */
class MiniVersion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mini_version';
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
    protected $casts = ['id' => 'integer', 'client_type' => 'integer', 'status' => 'integer', 'deleted' => 'integer', 'create_time' => 'integer', 'update_time' => 'integer'];
}