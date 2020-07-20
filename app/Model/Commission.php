<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $store_id 
 * @property string $title 
 * @property int $val_ratio 
 * @property int $pay_ratio 
 */
class Commission extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'commission';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'val_ratio' => 'integer', 'pay_ratio' => 'integer'];
}