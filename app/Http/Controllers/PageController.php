<?php

namespace App\Http\Controllers;
use App\Pages;
use App\Categories;
use App\Sub_categories;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $page=Pages::all();
        return view('gem/admin/page/index',compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $category =  Categories::all();
        $sub_category   = Sub_categories::all();
        return view('gem/admin/page/add/index',  compact('sub_category','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      $page=Pages::create($request->all());
      $file=$request->file('image');
        if($page!=null) {
         $gallery= new Gallery();
         $gallery->model_id=$page->id;
         $gallery->model_name="page";
         $gallery->image=$file->getClientOriginalName();
         $gallery->image_type=$file->getClientOriginalExtension();
         $gallery->save();
         $file->move('assets/images',$file->getClientOriginalName());
        }
        return redirect('add-page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)   {
        $page=Pages::findOrFail($id);
        $sub_category=  Sub_categories::findOrFail($page->sub_category_id);
        $categories=  Categories::findOrFail($sub_category->category_id);
        return view('gem/admin/page/edit/index',  compact('sub_category','page','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)   {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)   {
        $page=  Pages::findOrFail($request->id);
        $page->update($request->all());
        return redirect('page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Pages::whereId($id)->delete();
        return redirect('page');
    }
}
