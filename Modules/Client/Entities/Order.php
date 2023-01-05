<?php

namespace Modules\Client\Entities;

use Modules\Admin\Entities\Store;
use Modules\Client\Entities\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    function store()
    {
        return $this->belongsTo(Store::class);
    }
    function client()
    {
        return $this->belongsTo(Client::class);
    }
}
