<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'title', 'parent_id'];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
