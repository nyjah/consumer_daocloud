<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $share_rule_id 
 * @property string $goods_sn 
 */
class ShareGood extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'share_goods';
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
    protected $casts = ['share_rule_id' => 'integer'];
}