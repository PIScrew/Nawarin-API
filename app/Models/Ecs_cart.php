<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecs_cart extends Model
{
    protected $guarded = [];
    public function product(){
        return $this->belongsTo(Ecs_product::class,'id');
    }
}
