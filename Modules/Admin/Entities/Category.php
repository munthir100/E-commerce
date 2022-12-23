<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['products', 'brands', 'children'];

    protected $fillable = ['store_id', 'title', 'parent_id', 'is_active'];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }



    public static function buildCategoryTree($allCategories)
    {
        $rootCategories = $allCategories->whereNull('parent_id');
        self::formatTree($rootCategories, $allCategories);
        return $rootCategories;
    }

    private static function formatTree($categories, $allCategories)
    {
        foreach ($categories as $category) {

            $category->children = $allCategories->where('parent_id', $category->id)->values();

            if ($category->children->isNotEmpty()) {
                self::formatTree($category->children, $allCategories);
            }
        }
    }





    //belongs

    function store()
    {
        return $this->belongsTo(Store::class);
    }
}
