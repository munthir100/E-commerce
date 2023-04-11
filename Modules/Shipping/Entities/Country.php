<?php

namespace Modules\Shipping\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\StoreCountryAndCurrency;
use Modules\Admin\Entities\VAT;

class Country extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['cities'];

    protected $fillable = [
        'name',
        'capital_city',
        'currency_name',
        'code',
        'phone_code',
        'phone_digits_number',
        'symbol',
    ];

    function cities()
    {
        return $this->hasMany(City::class);
    }

    public function vats()
    {
        return $this->hasMany(VAT::class, "country_id");
    }

    public function storeCountryAndCurrency()
    {
        return $this->hasMany(StoreCountryAndCurrency::class, "country_id");
    }
}
