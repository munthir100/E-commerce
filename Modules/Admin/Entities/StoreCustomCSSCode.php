<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreCustomCSSCode extends Model
{
    use HasFactory;

    protected $fillable = ["css_code"];

    public function partsCustomization()
    {
        return $this->morphMany(PartsCustomization::class, "customizable");
    }
}
