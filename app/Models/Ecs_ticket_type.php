<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_ticket_type extends BaseModel
{
    use SoftDeletes;
    public function ticket(){
        return $this->hasMany(Ecs_ticket::class);
    }
}
