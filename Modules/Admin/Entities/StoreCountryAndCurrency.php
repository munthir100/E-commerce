<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Shipping\Entities\Country;

class StoreCountryAndCurrency extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "store_id",
        "country_id",
        "is_active"
    ];

    public function store(){
        return $this->belongsTo(Store::class,"store_id");
    }

    public function country(){
        return $this->belongsTo(Country::class,"country_id");
    }


}
