<?php

namespace Modules\Admin\Entities;

use Modules\Admin\Entities\Sale;
use Spatie\MediaLibrary\HasMedia;
use Modules\Client\Entities\Order;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\ProductImage;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes, CascadeSoftDeletes;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $cascadeDeletes = ['images'];


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
        'image',
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
        return $this->belongsTo(Store::class);
    }
    function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    // scopes

    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }
    public function scopeForStoreLink(Builder $query, $storeLink)
    {
        return $query->whereHas('store', function ($query) use ($storeLink) {
            $query->where('store_link', $storeLink);
        });
    }
}
