<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DefinitionPage extends Model
{
    use HasFactory;

    protected $fillable = ['store_id','title', 'description','is_active'];

    public function store(){
        return $this->belongsTo(Store::class,"store_id");
    }


}
