<?php

namespace Modules\Admin\Entities;

use Modules\Admin\Entities\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxNumber extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'number',
        'store_id',
    ];
    
    protected $dates = ['deleted_at'];
    
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
