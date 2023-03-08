<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Shipping\Entities\Country;

class VAT extends Model
{
    use HasFactory,SoftDeletes;

    protected $table="vats";
    protected $fillable = [
        "store_id",
        "country_id",
        "vat_value",
        "tax_on_shipping_services",
        "view_product_price_with_tax",
        "is_active",
    ];

    public function store(){
        return $this->belongsTo(Store::class,"store_id");
    }

    public function country(){
        return $this->belongsTo(Country::class,"country_id");
    }


}
