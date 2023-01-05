<?php

namespace Modules\Client\Entities;


use Modules\Acl\Entities\User;
use Modules\Admin\Entities\Admin;
use Modules\Shipping\Entities\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['orders'];

    protected $fillable = [
        'birth_date',
        'gender',
        'description',
        'number_of_orders',
        'city_id',
        'user_id',
        'store_id',
        'created_by',
        'store_link',
    ];
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
