<?php

namespace Modules\Shipping\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Client\Entities\Client;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function envoyes()
    {
        return $this->hasMany(Envoy::class);
    }
    
}
