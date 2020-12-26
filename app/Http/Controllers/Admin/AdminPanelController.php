<?php

namespace App\Http\Controllers\Admin;

use App\Configuration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdminPanelController extends Controller
{
    public function index(){
        $current = Configuration::where('name','current')->first()->value;
        Cache::put('current',$current,200);
        return view('admin.index');

    }
}
