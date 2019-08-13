<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecs_transaction_people extends BaseModel
{
    protected $guarded = [];
    public function transaction(){
        return $this->belongsTo(Ecs_transaction::class,'id_transaction');
    }
}
