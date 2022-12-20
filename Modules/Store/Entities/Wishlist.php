<?php

namespace Modules\Store\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\Product;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','product_id'];
    public $table = 'wishlist';


    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }


}
