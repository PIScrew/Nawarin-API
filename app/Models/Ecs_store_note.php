<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;


class Ecs_store_note extends Model
{
    use Sluggable;
    use SoftDeletes;
    protected $guarded = [];
    public function sluggable()
    {
        return [
            'slug_note' => [
                'source' => 'title_note'
            ]
        ];
    }
    public function store(){
        return $this->hasOne(Ecs_store::class);
    }
}
