<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SquareImage extends Model
{
    use HasFactory;

    protected $fillable = ["head_title"];

    public function partsCustomization(){
        return $this->morphMany(PartsCustomization::class, "customizable");
    }

    public function squareImagesDetail(){
        return $this->hasMany(SquareImagesDetail::class, "square_image_id");
    }
}
