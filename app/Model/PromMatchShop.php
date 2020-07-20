<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $shop_id 
 * @property int $skill_prom_id 
 * @property int $ass_prom_id 
 * @property int $ali_voucher_tpl_id 
 * @property int $wx_voucher_tpl_id 
 * @property int $share_rule_id 
 * @property int $prom_goods_id 
 * @property int $presell_id 
 */
class PromMatchShop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prom_match_shop';
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
    protected $casts = ['id' => 'integer', 'shop_id' => 'integer', 'skill_prom_id' => 'integer', 'ass_prom_id' => 'integer', 'ali_voucher_tpl_id' => 'integer', 'wx_voucher_tpl_id' => 'integer', 'share_rule_id' => 'integer', 'prom_goods_id' => 'integer', 'presell_id' => 'integer'];
}