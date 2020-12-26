<?php

namespace App\Http\Controllers\Admin;

use App\Action;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCreateRequest;
use App\Http\Requests\UpdateUserDataRequest;
use App\permission;
use App\User;
use App\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDataRequest $request, $id)
    {
        if ($request->has('password')&&!empty($request->password)){
        $user = User::where('id',$id)->update([
            'name'=>$request->name,
            'password'=>Hash::make($request->password)
        ]);
        }else{
            $user = User::where('id',$id)->update([
                'name'=>$request->name,
            ]);
        }
        $meta = UserMeta::where('users_id',$id)->update([
            'class'           => $request->class,
            'mobile'          => $request->mobile,
            'student_number'  => $request->student_number,
            'national_number' => $request->national_number,
            'name_en'         => $request->name_en,
            'field_study'     => $request->field_study,
            'birthday'        => $request->birthday,
        ]);
        return back()->with('success','ویرایش مشخصات با موفقیت انجام شد ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function login($id){
        auth()->loginUsingId($id);
        return redirect(route('profile'));
    }
    public function admin(AdminCreateRequest $request){
        $per = permission::where('user_id',$request->user)->get();
        if ($request->admin==1){
            if (count($per)==0){
                permission::create([
                   'user_id'=>$request->user,
                   'role'=>'admin'
                ]);
            }
        }else{
            if (count($per)>0){
                permission::where('user_id',$request->user)->delete();
            }
        }
        return back()->with('success','تغییر دسترسی با موفقیت انجام شد !');
    }
}
