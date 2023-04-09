<?php

namespace Modules\Client\Entities;

use Modules\Admin\Entities\Store;
use Modules\Client\Entities\Client;
use Modules\Client\Entities\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'shipping',
        'price',
        'client_id',
        'store_id',
    ];

    function store()
    {
        return $this->belongsTo(Store::class);
    }
    function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    function location()
    {
        return $this->hasOne(Location::class);
    }
}
