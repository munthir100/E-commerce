<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartsCustomization extends Model
{
    use HasFactory;

    protected $fillable = ["store_id","customizable" ];

    public function customizable(){
        return $this->morphTo();
    }
}
