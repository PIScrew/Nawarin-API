<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ecs_store_detail extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public function store(){
        return $this->hasOne(Ecs_store::class);
    }
}
