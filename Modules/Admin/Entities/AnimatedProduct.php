<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnimatedProduct extends Model
{
    use HasFactory;

    protected $fillable = ["type"];

    public function partsCustomization(){
        return $this->morphMany(PartsCustomization::class, "customizable");
    }

}
