<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    if (auth()->check()) {
        return redirect(route('profile'));
    }
    else {
        return view('welcome');
    }
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('userPanel')->middleware(['auth','point'])->group(function () {
    Route::get('/Panel', 'PanelController@panel')->name('profile');
    Route::get('/ChangePassword', 'PanelController@reset')->name('pass');
    Route::get('/address', 'PanelController@address')->name('adr');
    Route::resource('action', 'ActionController');
    Route::post('/MetaUserUpdate','UserController@saveUserMeta')->name('user.meta');
    Route::get('action/getSub/{id}','ActionController@GetSubCategory')->name('action.sub');
    Route::get('action/getCat/{id}','ActionController@GetCategory')->name('action.cat');
    Route::post('/delete/action','ActionController@delete')->name('action.delete');
    Route::post('/UpdatePassword','UserController@updatePassword')->name('update.password');
    Route::post('/address','UserController@Address')->name('user.address');
});
Route::prefix('AdminPanel')->namespace('Admin')->middleware(['auth','can:admin'])->group(function () {
    Route::get('adminPanel','AdminPanelController@index')->name('adminPanel');
    Route::resource('category','CategoryController');
    Route::resource('ActionPanel','UserActionController');
    Route::resource('User','UserController');
    Route::get('report','ReportController@index')->name('report');
    Route::get('MainCategory','CategoryController@category')->name('category.list');
    Route::get('SubCategory','CategoryController@subcategory')->name('category.sub');
    Route::get('plan','PlanController@index')->name('plan.index');
    //////delete category with ajax
    Route::post('Acdel','CategoryController@deleteMainCategory')->name('category.del');
    Route::post('Acdelm','CategoryController@deleteCategory')->name('category.cdel');
    Route::post('Acdels','CategoryController@deleteSubCategory')->name('category.sdel');
    Route::post('actdel','UserActionController@del')->name('act.del');
    Route::post('planDel','PlanController@delete')->name('plan.del');
    ////plan with ajax
    Route::post('planCurrent','PlanController@setCurrent')->name('plan.Current');
    Route::post('addPlan','PlanController@addplan')->name('plan.add');

    ////login using id
    Route::get('loginUsingId/{id}','UserController@login')->name('loginId');

    ////make admin
    Route::Put('makeAdmin','UserController@admin')->name('admin');
});
Route::post('/CreateUser', 'UserController@createUser')->name('createUser');


Route::get('/getSub/{id}','PanelController@GetGroup');







//Route::get('/dash',function (){
//    return view('user.dashboard');
//})->name('dash');
