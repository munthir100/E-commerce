<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeatureViewDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        "feature_view_id",
        "icon",
        "title",
        "subtitle"
    ];

    public function feature(){
        return $this->belongsTo(FeatureView::class,"feature_view_id");
    }
}
