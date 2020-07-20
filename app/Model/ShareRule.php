<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property int $share_type 
 * @property int $commission_rule_id 
 * @property int $is_multiple 
 * @property int $relate_goods_type 
 */
class ShareRule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'share_rule';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'share_type' => 'integer', 'commission_rule_id' => 'integer', 'is_multiple' => 'integer', 'relate_goods_type' => 'integer'];
}