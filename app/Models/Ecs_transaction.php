<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_transaction extends BaseModel
{
    use SoftDeletes;
    protected $guarded = [];
    public function people(){
        return $this->hasOne(Ecs_transaction_people::class, 'id');
    }
    public function detail(){
        return $this->hasMany(Ecs_transaction_detail::class, 'id');
    }
    public function address(){
        return $this->hasOne(Ecs_transaction_address::class, 'id');
    }
}
