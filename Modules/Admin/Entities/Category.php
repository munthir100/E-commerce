<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'title', 'parent_id'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('childs');
    }
}
