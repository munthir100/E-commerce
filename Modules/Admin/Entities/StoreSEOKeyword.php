<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreSEOKeyword extends Model
{
    use HasFactory;

    protected $fillable = ["store_seo_id","keyword"];

    public function store_seo(){
        return $this->belongsTo(StoreSEO::class,"store_seo_id");
    }
}
