<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['store_id'];

    // protected static function newFactory()
    // {
    //     return \Modules\Admin\Database\factories\AdminFactory::new();
    // }

    function store()
    {
        return $this->hasOne(Store::class);
    }
}
