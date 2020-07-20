<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $sm_id 
 * @property int $store_id 
 * @property string $content 
 * @property int $addtime 
 * @property int $open 
 */
class StoreMsg extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_msg';
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
    protected $casts = ['sm_id' => 'integer', 'store_id' => 'integer', 'addtime' => 'integer', 'open' => 'integer'];
}