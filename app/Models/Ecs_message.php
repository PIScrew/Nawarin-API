<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Ecs_message extends BaseModel
{
    use SoftDeletes;
    public function user(){
        return $this->belongsTo(Ecs_user::class);
    }
    public function store(){
        return $this->belongsTo(Ecs_store::class);
    }
}
