<?php

namespace App\Http\Controllers;

use App\Categories;
use App\sub_categories;
use Illuminate\Http\Request;
use App\Http\Requests;

class SubCategoryController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $sub_category = sub_categories::all();
        return view('gem/admin/sub_category/index', compact('sub_category'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        sub_categories::create($request->all());
        return redirect('sub-category-add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $sub_category = sub_categories::findOrFail($id);
        $category = Categories::all();
        return view('gem/admin/sub_category/edit/index', compact('category', 'sub_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $sub_category = sub_categories::findOrFail($request->id);
        $sub_category->update($request->all());
        return redirect('/subcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        sub_categories::whereId($id)->delete();
        return redirect('subcategory');
    }

    public function sub_category_add() {
        $category = Categories::all();
        return view('gem/admin/sub_category/add/index', compact('category'));
    }

}
