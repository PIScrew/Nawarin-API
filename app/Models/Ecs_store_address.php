<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecs_store_address extends Model
{
    protected $guarded = [];
    public function store(){
        return $this->hasOne(Ecs_store::class);
    }
}
