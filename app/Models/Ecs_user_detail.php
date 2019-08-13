<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_user_detail extends BaseModel
{
    protected $guarded = [];
    public function user(){
        return $this->benglongsTo(Ecs_detail::class);
    }
}
