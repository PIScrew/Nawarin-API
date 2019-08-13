<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_product extends BaseModel
{   
    use SoftDeletes;
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug_product' => [
                'source' => 'title_product'
            ]
        ];
    }
    public function category(){
        return $this->belongsTo(Ecs_category::class);
    }
    public function riviews(){
        return $this->hasMany(Ecs_product_review::class);
    }
    public function img(){
        return $this->hasMany(Ecs_product_img::class);
    }
    public function view(){
        return $this->hasMany(Ecs_product_view::class);
    }
    public function user(){
        return $this->belongsTo(Ecs_user::class);
    }
    public function comment(){
        return $this->hasMany(Ecs_product_comment::class);
    }
    public function cart(){
        return $this->hasMany(Ecs_cart::class);
    }
}
