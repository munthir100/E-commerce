<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreLanguageSupport extends Model
{
    use HasFactory;

    protected $fillable = ["store_id", "lang_support"];

    public function store(){
        return $this->belongsTo(Store::class,"store_id");
    }
}
