<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_measurement extends BaseModel
{
    use SoftDeletes;
    public function product(){
        return $this->belongsTo(Ecs_product::class);
    }
}
