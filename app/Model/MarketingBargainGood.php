<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $marketing_good_id 
 * @property float $target_price 
 * @property int $join_num 
 * @property int $bargain_sucess_num 
 */
class MarketingBargainGood extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketing_bargain_good';
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
    protected $casts = ['id' => 'integer', 'marketing_good_id' => 'integer', 'target_price' => 'float', 'join_num' => 'integer', 'bargain_sucess_num' => 'integer'];
}