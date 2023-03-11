<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreColorsControl extends Model
{
    use HasFactory;


    protected $fillable = ["buttons","paragraphs"];

    public function partsCustomization(){
        return $this->morphMany(PartsCustomization::class, "customizable");
    }

}
