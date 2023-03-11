<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SquareImagesDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        "square_image_id",
        "path",
        "path_type"
    ];

    public function squareImages(){
        return $this->belongsTo(SquareImage::class, "square_image_id");
    }
}
