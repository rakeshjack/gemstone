<?php

namespace App\Http\Controllers;

use App\Pages;
use App\Categories;
use App\Sub_categories;
use App\Contactus;
use Illuminate\Http\Request;
use App\Http\Requests;

class ClientController extends Controller {

    public function index() {
        $category = Categories::with(array('sub_categorys'))->get();
        return view('gem/home/index', ["category" => $category]);
    }

    public function login() {
        return view('auth/login');
    }

    /*
     *      CATEGORY Gets category
     */

    public function get(Request $request, $id) {
        $category = Categories::with(array('sub_categorys'))->get();
        return view('gem/jewelry/index', ["category" => $category]);
    }

    public function get_sub_category($category_id,$id) {
        $category = Categories::with(array('sub_categorys'))->get();
        if($category_id==1) {
            $page=  Pages::with(array('gallery_post'))->where('sub_category_id',$id)->get();
            return view('gem/gallery/index', ["category" => $category,"page" =>$page]);
        }else {
            $page=  Pages::all();
            return view('gem/jewelry/index', ["category" => $category,'page' =>$page]);
        }
    }
    /*
     *      AJAX Call in PAGES 
     */
    public function fetch_sub_category(Request $request) {
        $sub_category = Sub_categories::where('category_id', $request->category_id)->get();
        if ($sub_category != null) {
            return $sub_category;
        }
    }
    public function contact_us(Request $request) {
        Contactus::create($request->all());
        return redirect('/');
    }

}
