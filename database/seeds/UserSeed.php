<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = User::create([
            'name'=>"محمدجواد صیدی",
            'email'=>'miniopera165@gmail.com',
            'password'=>Hash::make('123456789')
        ]);
        \App\UserMeta::create([
           'users_id'=>$u->id,
           'class'=>"کارشناسی",
           'mobile'=>"09154951559",
           'student_number'=>'9812325047',
           'national_number'=>'0640732992',
           'name_en'=>'mohammad javad seydi',
           'field_study'=>'کامپیوتر',
           'birthday'=>'۱۳۸۰/۰۵/۲۶',
           'profile'=>'5f2f9371bf170f1.jpg'
        ]);
    }
}
