<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Acl\Entities\User;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'store_name', 'store_link'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function sellers()
    {
        return $this->HasMany(Seller::class);
    }
    
    public function media()
    {
        return $this->hasManyThrough(Media::class, User::class);
    }
}
