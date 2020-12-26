<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $guarded =[];
    public function category(){
        return $this->hasMany(Category::class,'main_categories_id');
    }
}
