<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Ecs_store_storefront extends Model
{
    use Sluggable;
    use SoftDeletes;
    protected $guarded = [];
    public function sluggable()
    {
        return [
            'slug_storefronts' => [
                'source' => 'title'
            ]
        ];
    }
    public function store(){
        return $this->hasOne(Ecs_store::class);
    }
}
