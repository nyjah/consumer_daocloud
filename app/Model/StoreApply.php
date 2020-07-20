<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 
 * @property string $contacts_name 
 * @property string $contacts_mobile 
 * @property string $contacts_email 
 * @property string $company_name 
 * @property int $company_type 
 * @property string $company_website 
 * @property int $company_province 
 * @property int $company_city 
 * @property int $company_district 
 * @property string $company_address 
 * @property string $company_telephone 
 * @property string $company_email 
 * @property string $company_fax 
 * @property string $company_zipcode 
 * @property string $business_licence_number 
 * @property string $business_licence_cert 
 * @property int $threeinone 
 * @property string $reg_capital 
 * @property string $legal_person 
 * @property string $legal_identity_cert 
 * @property string $legal_identity 
 * @property string $business_date_start 
 * @property string $business_date_end 
 * @property string $orgnization_code 
 * @property string $orgnization_cert 
 * @property string $attached_tax_number 
 * @property int $tax_rate 
 * @property int $taxpayer 
 * @property string $taxpayer_cert 
 * @property string $business_scope 
 * @property string $store_name 
 * @property string $seller_name 
 * @property int $store_type 
 * @property string $store_address 
 * @property string $store_person_name 
 * @property string $store_person_mobile 
 * @property string $store_person_qq 
 * @property string $store_person_email 
 * @property string $store_person_cert 
 * @property string $store_person_identity 
 * @property string $bank_account_name 
 * @property string $bank_account_number 
 * @property string $bank_branch_name 
 * @property int $bank_province 
 * @property int $bank_city 
 * @property int $main_channel 
 * @property string $sales_volume 
 * @property int $sku_num 
 * @property int $ec_experience 
 * @property float $avg_price 
 * @property int $ware_house 
 * @property int $entity_shop 
 * @property string $sc_name 
 * @property int $sc_id 
 * @property int $sc_bail 
 * @property int $sg_id 
 * @property string $sg_name 
 * @property string $store_class_ids 
 * @property float $paying_amount 
 * @property string $paying_amount_cert 
 * @property int $apply_state 
 * @property string $review_msg 
 * @property int $add_time 
 * @property int $apply_type 
 */
class StoreApply extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_apply';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'company_type' => 'integer', 'company_province' => 'integer', 'company_city' => 'integer', 'company_district' => 'integer', 'threeinone' => 'integer', 'tax_rate' => 'integer', 'taxpayer' => 'integer', 'store_type' => 'integer', 'bank_province' => 'integer', 'bank_city' => 'integer', 'main_channel' => 'integer', 'sku_num' => 'integer', 'ec_experience' => 'integer', 'avg_price' => 'float', 'ware_house' => 'integer', 'entity_shop' => 'integer', 'sc_id' => 'integer', 'sc_bail' => 'integer', 'sg_id' => 'integer', 'paying_amount' => 'float', 'apply_state' => 'integer', 'add_time' => 'integer', 'apply_type' => 'integer'];
}