<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'sku',
        'quantity',
        'wheight',
        'short_description',
        'description',
        'price',
        'cost',
        'discount',
        'on_store',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
