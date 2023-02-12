<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['categories', 'media'];


    protected $fillable = [
        'admin_id',
        'store_name',
        'store_link',
        'store_description',
        'instagram_link',
        'snapchat_link',
        'twitter_link',
        'tiktok_link',
        'telegram_link',
        'whatsapp_number',
        'phone_number',
        'facebook_user',
        'google_play_link',
        'apple_store_link',
//        'store_city'
    ];


    public function categories()
    {
        return $this->hasMany(Category::class)->where('is_active', true);
    }


    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function envoyes()
    {
        return $this->hasMany(Envoy::class);
    }


    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
