<?php

namespace Modules\Acl\Entities;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserTypes extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['users'];

    protected $fillable = ['name'];

    function users()
    {
        return $this->hasMany(User::class);
    }
}
