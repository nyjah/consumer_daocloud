<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $transaction_id 
 * @property string $out_trade_no 
 * @property int $total_fee 
 * @property int $profit_fee 
 * @property string $errmsg 
 * @property int $ts 
 */
class ProfitShareRetry extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profit_share_retry';
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
    protected $casts = ['id' => 'integer', 'total_fee' => 'integer', 'profit_fee' => 'integer', 'ts' => 'integer'];
}