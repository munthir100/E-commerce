<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'payment',
        'order_id',
        'product_id',
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
