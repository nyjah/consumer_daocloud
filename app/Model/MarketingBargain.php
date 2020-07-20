<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $marketing_id 
 * @property int $valid_time 
 * @property int $invalid_time 
 * @property int $target_num 
 * @property int $floor_num 
 * @property int $new_user_rate 
 */
class MarketingBargain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketing_bargain';
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
    protected $casts = ['id' => 'integer', 'marketing_id' => 'integer', 'valid_time' => 'integer', 'invalid_time' => 'integer', 'target_num' => 'integer', 'floor_num' => 'integer', 'new_user_rate' => 'integer'];
}