<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class YoutubeVideo extends Model
{
    use HasFactory;

    protected $fillable = ["link"];

    public function partsCustomization(){
        return $this->morphMany(PartsCustomization::class, "customizable");
    }

}
