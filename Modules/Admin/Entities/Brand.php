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
        'store_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
