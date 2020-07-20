<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $suppliers_id 
 * @property string $suppliers_name 
 * @property string $suppliers_desc 
 * @property int $is_check 
 * @property string $suppliers_contacts 
 * @property string $suppliers_phone 
 * @property int $store_id 
 */
class Supplier extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'suppliers';
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
    protected $casts = ['suppliers_id' => 'integer', 'is_check' => 'integer', 'store_id' => 'integer'];
}