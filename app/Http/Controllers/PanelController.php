<?php

namespace App\Http\Controllers;

use App\Address;
use App\Category;
use App\Group;
use App\MainCategory;
use App\University;
use App\UserMeta;
use Illuminate\Http\Request;

class PanelController extends Controller {

    ///show user panel for.editing information
    public function panel() {
        $user = auth()->user();
        $usermeta = $user->meta;
        $university_name = University::whereId($usermeta->university_id)->first()->name;
        $group_name = Group::whereId($usermeta->group_id)->first()->name;
        $info = [
            $user->name,
            $usermeta->student_number,
            $usermeta->name_en,
            $usermeta->national_number,
            $usermeta->class,
            $usermeta->field_study,
            $usermeta->mobile,
            $user->email,
            $usermeta->birthday,
            $university_name,
            $group_name

        ];
        return view('user.edit-profile',compact('info'));
    }

    ///show user password reset form
    public function reset() {
        return view('user.reset-password');
    }

    /// show or change user address
    public function address() {
        $address = Address::where('users_id',auth()->id())->get();
        return view('user.adrs',compact('address'));
    }

    /// get groups and return them
    public function GetGroup($id){
        $group = Group::where('university_id',$id)->get();
        foreach ($group as $g ){
            echo '<option value="'.$g['id'].'">'.$g['name'].'</option>';
        }
    }


    public function dashboard(){
        return view('user.dashboard');
    }


}
