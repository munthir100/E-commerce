<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Shipping\Entities\Country;

class Theme extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "path",
        "name",
        "price",
        "country_id",
        "is_active"
    ];

    public function themesUsed(){
        return $this->hasMany(StoreTheme::class, "theme_id");
    }

    public function country(){
        return $this->belongsTo(Country::class, "country_id");
    }



//    protected static function newFactory()
//    {
//        return \Modules\Admin\Database\factories\ThemeFactory::new();
//    }


}
