<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_product_review extends BaseModel
{
    use SoftDeletes;
    protected $guarded = [];
    public function product(){
        return $this->belongsTo(Ecs_product::class,'id');
    }
}
