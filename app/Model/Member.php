<?php

declare (strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id
 * @property string $ali_out_card_id
 * @property string $ali_card_id
 * @property string $ali_open_date
 * @property string $ali_valid_date
 * @property string $wx_card_id
 * @property int $integral
 * @property float $balance
 * @property string $realname
 * @property int $shop_id
 * @property int $store_id
 * @property string $id_card
 * @property string $ali_tell
 * @property string $borthday
 * @property int $lunar_calendar
 */
class Member extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member';
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
    protected $casts = ['id' => 'integer', 'integral' => 'integer', 'balance' => 'float', 'shop_id' => 'integer', 'store_id' => 'integer', 'lunar_calendar' => 'integer'];

    public $timestamps = false;
    
}