<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_ticket extends BaseModel
{
    use SoftDeletes;
    public function ticketType(){
        return $this->belongsTo(Ecs_ticket_type::class);
    }
    public function user(){
        return $this->belongsTo(Ecs_user::class);
    }
}
