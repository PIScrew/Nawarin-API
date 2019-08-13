<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecs_user_dateofbirth extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->benglongsTo(Ecs_detail::class);
    }
}
