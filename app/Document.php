<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];
    public function action(){
        return $this->belongsTo(Action::class,'actions_id');
    }
}
