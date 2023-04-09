<?php

namespace Modules\Client\Entities;


use Modules\Acl\Entities\User;
use Modules\Admin\Entities\Sale;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\Store;
use Modules\Shipping\Entities\City;
use Modules\Client\Entities\Location;
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

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    // scoopes

    public function scopeSearch($query, $searchQuery)
    {
        return $query->whereHas('user', function ($query) use ($searchQuery) {
            $query->where('name', 'like', '%' . $searchQuery . '%')
                ->orWhere('phone', 'like', '%' . $searchQuery . '%');
        });
    }
}
