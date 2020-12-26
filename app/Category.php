<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded =[];
    public function SubCategory(){
        return $this->hasMany(SubCategory::class,'categories_id');
    }
    public function MainCategory(){
        return $this->belongsTo(MainCategory::class,'main_categories_id');
    }
}
