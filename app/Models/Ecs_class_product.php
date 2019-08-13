<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecs_class_product extends Model
{
    public function product(){
        return $this->belongsTo(Ecs_prduct::class);
    }
}
