<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdditionalStoreSetting extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "store_id",
        "copyright",
        "activate_the_minimum_order",
        "the_minimum_order",
        "biology_activation",
        "product_pictures_show_one_size",
        "activate_the_gift_system",
        "activate_electronic_payment_fees",
        "product_default_weight",
        "commercial_registration_no",
        "show_commercial_registration_no",
        "temporarily_stopping_the_store",
    ];

    public function store(){
        return $this->belongsTo(Store::class,"store_id");
    }
}
