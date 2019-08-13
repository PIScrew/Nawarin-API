<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_store extends BaseModel
{
    use Sluggable;
    use SoftDeletes;
    protected $guarded = [];
    public function sluggable()
    {
        return [
            'slug_store' => [
                'source' => 'name_store'
            ]
        ];
    }
    public function user(){
        return $this->hasOne(Ecs_user::class);
    }
    public function message(){
        return $this->hasMany(Ecs_message::class);
    }
    public function address(){
        return $this->hasOne(Ecs_store_address::class);
    }
    public function note(){
        return $this->hasMany(Ecs_store_note::class);
    }
    public function detail(){
        return $this->hasMany(Ecs_store_detail::class);
    }
    public function sosmed(){
        return $this->hasMany(Ecs_store_sosmed::class);
    }
    public function storefront(){
        return $this->hasMany(Ecs_store_storefront::class);
    }
}
