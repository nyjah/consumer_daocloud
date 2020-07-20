<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $member_id 
 * @property int $store_id 
 * @property string $action 
 * @property int $num 
 * @property int $create_time 
 */
class MemberLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member_log';
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
    protected $casts = ['id' => 'integer', 'member_id' => 'integer', 'store_id' => 'integer', 'num' => 'integer', 'create_time' => 'integer'];
}