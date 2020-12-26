<?php

namespace App\Http\Controllers\Admin;

use App\Action;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeActionRequest;
use App\MainCategory;
use App\MetaStatus;
use App\SubCategory;
use App\User;
use Illuminate\Http\Request;

class UserActionController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $action = new Action();

        $action = $this->Filters($action);
        $action = $action->orderBy('id', 'DESC')->get();
        $maincategory = MainCategory::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin.Action.index', compact('action', 'maincategory', 'category', 'subcategory'));
    }

    public function Filters($action){
        if (\request()->has('user')) {
            $user = \request()->query('user');
            if (!empty($user)) {
                User::findOrFail($user);
                $action = $action->where('users_id', $user);
            }
        }
        if (\request()->has('userinfo')&&!empty(request()->has('userinfo'))){
            $userinfo = \request()->userinfo;
            $action = $action->whereHas('User',function ($user) use ($userinfo){
               $user->where('name','LIKE','%'.$userinfo.'%')->orWhere('email','LIKE','%'.$userinfo.'%')->orWhereHas('meta',function ($meta) use ($userinfo){
                    $meta->where('mobile','LIKE','%'.$userinfo.'%')->orWhere('student_number','LIKE','%'.$userinfo.'%')->orWhere('national_number','LIKE','%'.$userinfo.'%');

               });
            });
        }
        if (\request()->has('title')&&!empty(request()->has('title')))
            $action = $action->where('title','like','%'.request()->title.'%');

        if (\request()->has('main')&&request()->main!=-1)
            $action = $action->where('main_categories_id',request()->main);

        if (\request()->has('category')&&request()->category!=-1)
            $action = $action->where('categories_id',request()->category);

        if (\request()->has('subcategory')&&request()->subcategory!=-1)
            $action = $action->where('sub_categories_id',request()->subcategory);

        if (\request()->has('status')&&request()->status!=-1)
            $action = $action->where('status',request()->status);

        return $action;
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('admin\action\show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $action = Action::where('id', $id)->first();
        return view('admin.Action.edit', compact('action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChangeActionRequest $request, $id) {
        if ($request->status == 2) {
            MetaStatus::create([
                'actions_id'  => $id,
                'description' => $request->reason . '',
                'users_id'    => auth()->id()
            ]);
            Action::where('id', $id)->update([
                'status' => $request->status,
            ]);
        }
        elseif ($request->status == 1) {
            Action::where('id', $id)->update([
                'status' => $request->status,
                'points' => $request->point,
            ]);
        }
        if ($request->st == 1) {
            Action::where('id', $id)->update([
                'points' => $request->point,
            ]);
        }
        return back()->with('success', 'تغییر وضعیت با موفقیت انجام شد !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
    public function del(){
        $id = request('id');
        Action::where([['id','=',$id]])->delete();
    }
}
