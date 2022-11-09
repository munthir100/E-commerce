<?php

namespace Modules\Shipping\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Envoy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shipping_cost',
        'cash_on_delivery_cost',
        'expected_delivery_time',
        'user_id',
        'city_id'
    ];

    public function cities()
    {
        return $this->belongsToMany(City::class);
    }
}