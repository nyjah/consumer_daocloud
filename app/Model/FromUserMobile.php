<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $from_user_id 
 * @property string $mobile 
 */
class FromUserMobile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'from_user_mobile';
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
    protected $casts = ['id' => 'integer', 'from_user_id' => 'integer'];
}