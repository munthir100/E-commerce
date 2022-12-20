<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Store extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id', 'store_name', 'store_link'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
