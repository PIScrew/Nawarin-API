<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_product_wishlist extends BaseModel
{
    use SoftDeletes;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(Ecs_user::class);
    }
    public function product(){
        return $this->belongsTo(Ecs_prduct::class);
    }
}
