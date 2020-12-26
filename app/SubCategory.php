<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $guarded =[];
    public function MainCategory(){
        return $this->belongsTo(MainCategory::class,'main_categories_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'categories_id');
    }
}
