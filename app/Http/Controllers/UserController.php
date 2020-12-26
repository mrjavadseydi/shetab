<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\AddressRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UserMetaRequest;
use App\User;
use App\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function createUser(CreateUserRequest $request) {
        $c = User::where('email', $request->email)->count();
        if ($c != 0) {
            return back()->with('danger', 'حساب کاربری با این ایمیل وجود دارد!');
        }
        $u = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password)
        ]);
        try {
            UserMeta::create([
                'users_id'        => $u->id,
                'class'           => $request->category,
                'mobile'          => $request->mobile,
                'student_number'  => '123456',
                'university_id'  =>$request->university,
                'group_id'  => $request->group,
                'national_number' => '123456',
                'name_en'         => "EMPTY",
                'field_study'     => 123454,
                'birthday'        => "123",
                'profile'=>'none'

            ]);
            Auth::loginUsingId($u->id);
        } catch (\Exception $e) {
            User::where('id', $u->id)->delete();
            return back()->with('danger', "خطای ناشناخته!");
        }
        return redirect(route('profile'));
    }

    public function saveUserMeta(UserMetaRequest $request) {
        $u = UserMeta::where('users_id', \auth()->id())->first();
        $file = $request->File('profile');
        $name = uniqid() . $file->getClientOriginalName();
        $file->move(public_path() . '/users_profile/', $name);
        $u->update([
            'class'           => $request->class,
            'mobile'          => $request->mobile,
            'student_number'  => $request->student_number,
            'national_number' => $request->national_number,
            'name_en'         => $request->name_en,
            'field_study'     => $request->field_study,
            'birthday'        => $request->birthday,
            'profile'         => $name,
        ]);
        return back()->with('success', 'اطلاعات شما بروز رسانی شد !');
    }

    public function updatePassword(UpdatePasswordRequest $request) {
        $user = Auth::user();
        $cpass = Hash::make($request->password);

        if (Hash::check($request->password, $user->password)) {
            $u = User::where('id', auth()->id())->first();
            $u->update([
                'password' => Hash::make($request->newpassword)
            ]);
            return back()->with('success', 'تغییر پسورد با موفقیت انجام شد !');

        }
        else {
            return back()->with('danger', 'پسورد شما صحیح نمیباشد!');
        }

    }
    public function Address(AddressRequest $request){
        $adr = Address::where('users_id',\auth()->id())->get();
        if (count($adr)==0){
            Address::create([
                'province'=>$request->province,
                'city'=>$request->city,
                'post_cod'=>$request->postcode,
                'users_id'=>auth()->id(),
                'address'=>$request->address
            ]);
        }else{
            Address::where('users_id',\auth()->id())->update([
                'province'=>$request->province,
                'city'=>$request->city,
                'post_cod'=>$request->postcode,
                'address'=>$request->address
            ]);
        }
        return back()->with('success','بروز رسانی آدرس با موفقیت انجام شد !');
    }
}
