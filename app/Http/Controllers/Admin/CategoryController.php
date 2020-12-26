<?php

namespace App\Http\Controllers\Admin;

use App\Action;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\MainCategory;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $main_category = MainCategory::All();
        return view('admin/category/index', compact('main_category'));
    }

    public function category() {
        $category = new Category();
        $category = $this->categoryFilter($category);
        $category = $category->get();
        return view('admin/category/category', compact('category'));
    }

    public function subcategory() {
        $subcategory = new SubCategory();
        $subcategory = $this->subcategoryFilter($subcategory);
        $subcategory = $subcategory->get();
        return view('admin/category/sub', compact('subcategory'));
    }

    public function categoryFilter($category) {
        if (request()->has('id') && !empty(\request('id'))) {
            MainCategory::findOrFail(request('id'));
            $category = $category->where('main_categories_id', request('id'));
        }
        return $category;
    }

    public function SubcategoryFilter($category) {
        if (request()->has('id') && !empty(\request('id'))) {
            Category::findOrFail(request('id'));
            $category = $category->where('categories_id', request('id'));
        }
        return $category;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $main_category = MainCategory::All();
        $category = Category::all();
        $vcat = Category::all();
        return view('admin/category/create', compact('main_category', 'category', 'vcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request) {
        if ($request->type == "main") {
            MainCategory::create([
                'name' => $request->name
            ]);
        }
        elseif ($request->type == "category") {
            Category::create([
                'name'               => $request->name,
                'main_categories_id' => $request->main,
                'parent'             => -1
            ]);
        }
        else {
            $cat = Category::where('id', $request->category)->first()->main_categories_id;
            SubCategory::create([
                'name'               => $request->name,
                'min_point'          => $request->min,
                'max_point'          => $request->max,
                'categories_id'      => $request->category,
                'main_categories_id' => $cat,
            ]);
        }
        return back()->with('success', 'اطلاعات با موفقیت ذخیره شد !');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $ex = explode('&', $id);
        $id = $ex[0];
        $type = $ex[1];
        //        $category = Category::all();
        if ($type == 1) {
            $data = MainCategory::whereId($id)->first();
            return view('admin/category/edit',compact('data','type'));

        }
        elseif ($type == 2) {
            $main = MainCategory::All();
            $data = Category::whereId($id)->first();
            return view('admin/category/edit',compact('data','type','main'));

        }elseif ($type==3){
            $category = Category::All();
            $data = SubCategory::whereId($id)->first();
            return view('admin/category/edit',compact('data','type','category'));
        }
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCategoryRequest $request, $id) {
        if ($request->type == "main") {
            MainCategory::where('id',$id)->update([
                'name' => $request->name
            ]);
        }
        elseif ($request->type == "category") {
            Category::where('id',$id)->update([
                'name'               => $request->name,
                'main_categories_id' => $request->main,
                'parent'             => -1
            ]);
        }
        else {
            $cat = Category::where('id', $request->category)->first()->main_categories_id;
            SubCategory::where('id',$id)->update([
                'name'               => $request->name,
                'min_point'          => $request->min,
                'max_point'          => $request->max,
                'categories_id'      => $request->category,
                'main_categories_id' => $cat,
            ]);
        }
        return back()->with('success', 'اطلاعات با موفقیت ذخیره شد !');
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
    public function deleteMainCategory(){
        $id = request('id');
        MainCategory::where([['id','=',$id]])->delete();
    }
    public function deleteCategory(){
        $id = request('id');
        Category::where([['id','=',$id]])->delete();
    }
    public function deleteSubCategory(){
        $id = request('id');
        SubCategory::where([['id','=',$id]])->delete();
    }
}
