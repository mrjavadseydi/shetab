<?php

namespace App\Http\Controllers\Admin;

use App\Configuration;
use App\Http\Controllers\Controller;
use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PlanController extends Controller
{
    public function index(){
        $plan = Plan::all();
        $current = Configuration::where('name','current')->first()->value;
        Cache::put('current',$current,200);
        return view('admin.plan.index',compact('plan'));
    }
    public function delete(){
        $current = Configuration::where('name','current')->first()->value;
        Cache::put('current',$current,200);
            $id = request('id');
            Plan::where([['id','=',$id]])->delete();
    }
    public function setCurrent(){

        $id = request('id');
        Configuration::where('name','current')->update([
            'value'=>$id
        ]);
        $current = Configuration::where('name','current')->first()->value;
        Cache::put('current',$current,200);
    }
    public function addplan(){
        $current = Configuration::where('name','current')->first()->value;
        Cache::put('current',$current,200);
        Plan::create([
            'name'=>request('text')
        ]);
    }
}
