<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $guarded =[];
    public function document(){
        return $this->hasOne(Document::class,'actions_id');
    }
    public function MainCategory(){
        return $this->belongsTo(MainCategory::class,'main_categories_id');
    }
    public function Category(){
        return $this->belongsTo(Category::class,'categories_id');
    }
    public function SubCategory(){
        return $this->belongsTo(SubCategory::class,'sub_categories_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'users_id');

    }
    public function Status(){
        return $this->hasOne(MetaStatus::class,'actions_id');
    }
    public function ScopeGetCurrent(){
        return Configuration::where('name','current')->first()->value;
    }
}
