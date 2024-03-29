<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartsCustomization extends Model
{
    use HasFactory;

    protected $fillable = ["store_link", "customizable_id", 'customizable_type'];

    public function customizable()
    {
        return $this->morphTo();
    }
}
