<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'longitude',
        'latitude',
        'address',
        'client_id',
        'address_type',
        'order_id',
    ];
}
