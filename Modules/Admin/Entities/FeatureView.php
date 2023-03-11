<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeatureView extends Model
{
    use HasFactory;

    protected $fillable = [];


    public function partsCustomization(){
        return $this->morphMany(PartsCustomization::class, "customizable");
    }

    public function feature_details(){
        return $this->hasMany(FeatureViewDetail::class,"feature_view_id");
    }
}
