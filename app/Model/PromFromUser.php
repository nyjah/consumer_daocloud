<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $prom_id 
 * @property int $prom_tag 
 * @property int $from_user_id 
 */
class PromFromUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prom_from_user';
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
    protected $casts = ['id' => 'integer', 'prom_id' => 'integer', 'prom_tag' => 'integer', 'from_user_id' => 'integer'];
}