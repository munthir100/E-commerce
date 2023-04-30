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
        'phone',
        'address',
        'address_type',
        'client_id',
    ];
}
