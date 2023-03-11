<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreNavbarControl extends Model
{
    use HasFactory;

    protected $fillable = [
        "paragraph",
        "color",
        "link",
        "is_active",
    ];

    public function partsCustomization(){
        return $this->morphMany(PartsCustomization::class, "customizable");
    }
}
