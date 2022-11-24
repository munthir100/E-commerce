<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Acl\Entities\User;

class Media extends Model
{
    use HasFactory;
    public $table = 'social_media';
    protected $fillable = [];

    public function store()
    {
        return $this->belongsTo(User::class);
    }
}
