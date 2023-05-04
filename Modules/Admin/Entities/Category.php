<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['products', 'brands', 'children'];

    protected $fillable = [
        'store_id', 'title', 'parent_id', 'is_active',
    ];

    // Relationships

    public function products()
    {
        return $this->hasMany(Product::class)->isActive();
    }

    public function brands()
    {
        return $this->hasMany(Brand::class)->isActive();
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // Scopes

    public function scopeIsActive(Builder $query)
    {
        return $query->where('is_active', true);
    }

    public function scopeForStoreLink(Builder $query, $storeLink)
    {
        return $query->whereHas('store', function ($query) use ($storeLink) {
            $query->where('store_link', $storeLink);
        });
    }

    public function scopeForAdmin($query, $userId)
    {
        return $query->whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        });
    }


    // Methods

    public static function buildCategoryTree($allCategories)
    {
        $rootCategories = $allCategories->filter(fn ($category) => $category->isRoot());

        $rootCategories->each(function ($rootCategory) use ($allCategories) {
            $rootCategory->children = $rootCategory->buildChildren($allCategories);
        });

        return $rootCategories;
    }

    private function buildChildren($allCategories)
    {
        $children = $allCategories->filter(fn ($category) => $category->parent_id === $this->id);

        $children->each(function ($child) use ($allCategories) {
            $child->children = $child->buildChildren($allCategories);
        });

        return $children;
    }

    public function isRoot()
    {
        return $this->parent_id === null;
    }
}
