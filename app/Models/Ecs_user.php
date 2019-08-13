<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Ecs_user extends BaseModel implements AuthenticatableContract, JWTSubject
{
     // Soft delete and user authentication
     use SoftDeletes, Authenticatable;

    // When querying the user, do not expose the password
    protected $hidden = ['password', 'deleted_at'];

    public function role(){
        return $this->belongsTo(Ecs_user_role::class);
    }
    // jwt need to implement the method
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    // jwt need to implement the method
    public function getJWTCustomClaims()
    {
        return [];
    }
    // user detail
    public function userDetail(){
        return $this->hasOne(Ecs_user_detail::class);
    }
    // end user detail
    // addres user
    public function address(){
        return $this->hasMany(Ecs_user_address::class);
    }
    // end address user
    // bank
    public function bank(){
        return $this->hasMany(Ecs_user_bank::class);
    }
    // end bank
    public function product(){
        return $this->hasMany(Ecs_product::class);
    }
    public function comment(){
        return $this->hasMany(Ecs_product_comment::class);
    }
    public function message(){
        return $this->hasMany(Ecs_message::class);
    }
    public function store(){
        return $this->hasOne(Ecs_store::class);
    }
    public function dateofbirth(){
        return $this->hasOne(Ecs_user_dateofbirth::class);
    }
}
