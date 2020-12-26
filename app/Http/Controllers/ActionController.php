<?php

namespace App\Http\Controllers;

use App\Action;
use App\Category;
use App\Document;
use App\Http\Requests\ActionStoreRequest;
use App\MainCategory;
use App\SubCategory;
use App\User;
use Illuminate\Http\Request;

class ActionController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = auth()->user();
        $usermeta = $user->meta;
        if ($usermeta['student_number']=='123456'){
            return redirect(route('profile'))->with('danger','لطفا ابتدا مشخصات خود را تکمیل کنید!');
        }
        $data = Action::where('users_id',auth()->id())->get();
        return view('user.report',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $user = auth()->user();
        $usermeta = $user->meta;
        if ($usermeta['student_number']=='123456'){
            return redirect(route('profile'))->with('danger','لطفا ابتدا مشخصات خود را تکمیل کنید!');
        }
        $main = MainCategory::all();
        return view('user.activity', compact('main'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActionStoreRequest $request) {
        $c = Category::where('id', $request->category)->first();
        $main = $c->main_categories_id;
        try {
            $ac = Action::create([
                'users_id'           => auth()->id(),
                'main_categories_id' => $main,
                'categories_id'      => $request->category,
                'sub_categories_id'  => $request->subcategory,
                'title'              => $request->title,
                'date'               => $request->date,
                'description'        => $request->description,
                'status'             => 0,
                'points'             => 0,
                'plan_id'            =>Action::GetCurrent()

            ]);
            $file = $request->File('file');
            $name = uniqid() . $file->getClientOriginalName();
            $file->move(public_path() . '/UserDocument/', $name);
            Document::create([
               'users_id'=> auth()->id(),
               'actions_id'=>$ac->id,
               'file'=>$name,
            ]);
            return  back()->with('success','ثبت فعالیت با موفقیت انجام شد !');
        }catch (Exption $e){
            return  back()->with('danger','خطای ناشناخته !');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $action = Action::findOrFail($id);
        if($action['users_id']!=auth()->id()){
            abort(403);
        }else{
            return  view('user.show',compact('action'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
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

    public function GetSubCategory($id) {
        $sub = SubCategory::where('categories_id', $id)->get();
        foreach ($sub as $s) {
            echo "<option value='$s->id'>$s->name</option>";
        }
    }
    public function GetCategory($id) {
        $sub = Category::where('main_categories_id', $id)->get();
        echo "<option>انتخاب کنید</option>";
        foreach ($sub as $s) {
            echo "<option value='$s->id'>$s->name</option>";
        }
    }


    public function delete(){
        $id = request('id');
        Action::where([['id','=',$id],['users_id','=',auth()->id()],['status','=','0']])->delete();
    }
}
