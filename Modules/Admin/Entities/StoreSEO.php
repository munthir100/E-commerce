<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreSEO extends Model
{
    use HasFactory;

    protected $fillable = ["page_title","store_description"];

    public function keywords(){
        return $this->hasMany(storeSEOKeyword::class,"store_seo_id");
    }
}
