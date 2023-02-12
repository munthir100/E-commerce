<?php

namespace Modules\Admin\Entities;

use Modules\Acl\Entities\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['store'];

    protected $fillable = ['store_id'];

    public function store()
    {
        return $this->hasOne(Store::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
