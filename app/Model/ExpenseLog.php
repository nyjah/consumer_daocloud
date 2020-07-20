<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $admin_id 
 * @property float $money 
 * @property int $type 
 * @property int $addtime 
 * @property int $log_type_id 
 * @property int $user_id 
 * @property int $store_id 
 */
class ExpenseLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expense_log';
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
    protected $casts = ['id' => 'integer', 'admin_id' => 'integer', 'money' => 'float', 'type' => 'integer', 'addtime' => 'integer', 'log_type_id' => 'integer', 'user_id' => 'integer', 'store_id' => 'integer'];
}