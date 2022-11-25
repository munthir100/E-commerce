<?php

namespace Modules\Acl\Entities;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
use Modules\Admin\Entities\Brand;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\Media;
use Modules\Admin\Entities\Product;
use Modules\Admin\Entities\Seller;
use Modules\Admin\Entities\Store;
use Modules\Client\Entities\Client;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guard_name = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_type_id',
        'name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function userType()
    {
        return $this->belongsTo(UserTypes::class);
    }

    public function store()
    {
        return $this->hasOne(Store::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function sellers()
    {
        return $this->HasMany(Seller::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function clients(){
        return $this->hasMany(Client::class);
    }
}
