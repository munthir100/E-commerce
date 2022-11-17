<?php

namespace Modules\Acl\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserTypes extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
