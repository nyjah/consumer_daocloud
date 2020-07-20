<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property int $create_time 
 * @property int $refuse_time 
 * @property int $pay_time 
 * @property int $check_time 
 * @property float $money 
 * @property string $bank_name 
 * @property string $bank_card 
 * @property string $realname 
 * @property string $remark 
 * @property int $status 
 * @property string $pay_code 
 */
class StoreWithdrawal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_withdrawals';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'create_time' => 'integer', 'refuse_time' => 'integer', 'pay_time' => 'integer', 'check_time' => 'integer', 'money' => 'float', 'status' => 'integer'];
}