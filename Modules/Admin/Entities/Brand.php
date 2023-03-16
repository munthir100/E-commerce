<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'number_of_products',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // scopes

    public function scopeForAdmin($query, $userId)
    {
        return $query->whereHas('category.store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        });
    }

    public function scopeSearch($query, $searchQuery, $categoryId)
    {
        return $query->when('name', function ($query) use ($searchQuery) {
            $query->where('name', 'like', '%' . $searchQuery . '%');
        })->when($categoryId, function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        });
    }
}
