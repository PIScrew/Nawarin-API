<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecs_product_view extends BaseModel
{
    protected $guarded = [];
    public function product(){
        return $this->belongsTo(Ecs_product::class);
    }
}
