<?php

namespace Modules\Admin\Entities;

use Spatie\MediaLibrary\HasMedia;
use Modules\Client\Entities\Order;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes, CascadeSoftDeletes;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $cascadeDeletes = ['orders'];


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
        'is_active',
        'category_id',
        'store_id',
        'user_id',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    function category()
    {
        return $this->belongsTo(Category::class);
    }
    function store()
    {
        return $this->belongsToThrough(Store::class, Category::class);
    }
}
