<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panner extends Model
{
    use HasFactory;

    protected $fillable = ["path", "path_type", "panner_type"];

    public function partsCustomization(){
        return $this->morphMany(PartsCustomization::class, "customizable");
    }

}
