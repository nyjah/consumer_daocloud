<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property float $money 
 * @property int $create_time 
 * @property int $check_time 
 * @property int $pay_time 
 * @property int $refuse_time 
 * @property string $bank_name 
 * @property string $bank_card 
 * @property string $realname 
 * @property string $remark 
 * @property float $taxfee 
 * @property int $status 
 * @property string $pay_code 
 * @property string $error_code 
 */
class Withdrawal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'withdrawals';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'money' => 'float', 'create_time' => 'integer', 'check_time' => 'integer', 'pay_time' => 'integer', 'refuse_time' => 'integer', 'taxfee' => 'float', 'status' => 'integer'];
}