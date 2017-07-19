<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use App\Http\Requests;

class CategoryController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
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
        Categories::create($request->all());
        return redirect('add-categories')->with('message','Category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {
        $Categories = Categories::all();
        $message=$request->session()->flash('message','View all Categories');
        return view('gem/admin/category/index', compact('Categories','message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_page($id) {
        $Category = Categories::findOrFail($id);
        return view('gem/admin/category/edit/index', compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category_destroy($id) {
        Categories::whereId($id)->delete();
        return redirect('show');
    }

    public function category_update(Request $request) {
        $category = Categories::findOrFail($request->id);
        $category->update($request->all());
        return redirect('show');
    }

}
