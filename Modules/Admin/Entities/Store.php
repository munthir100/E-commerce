<?php

namespace Modules\Admin\Entities;

use Modules\Shipping\Entities\City;
use Modules\Admin\Entities\TaxNumber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['categories', 'media'];


    protected $fillable = [
        'admin_id',
        'store_name',
        'store_link',
        'store_desc',
        'instagram_link',
        'snapchat_link',
        'twitter_link',
        'tiktok_link',
        'telegram_link',
        'whatsapp_number',
        'phone_number',
        'facebook_user',
        'google_play_link',
        'apple_store_link',
        'logo',
        'browser_icon',
        'city_id'
    ];

    public function storeThemes()
    {
        return $this->hasMany(StoreTheme::class, "store_id");
    }

    public function storeLanguageSupport()
    {
        return $this->hasMany(StoreLanguageSupport::class, "store_id");
    }

    public function additionalStoreSetting()
    {
        return $this->hasOne(AdditionalStoreSetting::class, "store_id");
    }

    public function vats()
    {
        return $this->hasMany(VAT::class, "store_id");
    }

    public function storeCountryAndCurrency()
    {
        return $this->hasMany(StoreCountryAndCurrency::class, "store_id");
    }

    public function definitionPages()
    {
        return $this->hasMany(DefinitionPage::class, "store_id");
    }


    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function envoyes()
    {
        return $this->hasMany(Envoy::class);
    }


    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function taxNumber()
    {
        return $this->hasMany(TaxNumber::class);
    }
}
