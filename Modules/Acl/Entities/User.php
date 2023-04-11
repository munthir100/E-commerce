<?php

namespace Modules\Acl\Entities;

use Laravel\Sanctum\HasApiTokens;
use Modules\Admin\Entities\Admin;
use Modules\Client\Entities\Client;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Shipping\Entities\Country;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['admin', 'seller', 'client'];

    protected $fillable = [
        'user_type_id',
        'name',
        'email',
        'phone',
        'password',
        'country_id',
        'city_id'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];






    function userType()
    {
        return $this->belongsTo(UserTypes::class);
    }

    function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function seller()
    {
        return $this->hasOne(Seller::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    function country()
    {
        return $this->belongsTo(Country::class);
    }
}
