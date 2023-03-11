<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreTheme extends Model
{
    use HasFactory;

    protected $fillable = [
        "store_id",
        "theme_id",
        "purchase_price",
        "is_active"
    ];

    public function store(){
        return $this->belongsTo(Store::class,"store_id");
    }

    public function theme(){
        return $this->belongsTo(Theme::class,"theme_id");
    }


//    protected static function newFactory()
//    {
//        return \Modules\Admin\Database\factories\StoreThemeFactory::new();
//    }
}
