<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaStatus extends Model
{
    protected $guarded =[];
    public function User(){
        return $this->belongsTo(User::class,'users_id');

    }
}
