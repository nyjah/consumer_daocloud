<?php

declare (strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id
 * @property int $store_id
 * @property int $gift
 * @property int $shop
 * @property int $shop_once
 * @property int $comment
 * @property int $login
 * @property int $share
 * @property int $reg
 */
class MemberIntegralRule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member_integral_rule';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'gift' => 'integer', 'shop' => 'integer', 'shop_once' => 'integer', 'comment' => 'integer', 'login' => 'integer', 'share' => 'integer', 'reg' => 'integer'];

    public $timestamps = false;
}