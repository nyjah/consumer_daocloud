<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $catgory_id 
 * @property int $erp_catgory_id 
 * @property int $erp_catgory_code 
 * @property int $erp 
 */
class CatgoryErpMatchCopy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'catgory_erp_match_copy';
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
    protected $casts = ['catgory_id' => 'integer', 'erp_catgory_id' => 'integer', 'erp_catgory_code' => 'integer', 'erp' => 'integer'];
}