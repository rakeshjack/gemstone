<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Sub_categories;
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

    public function get_sub_category(Request $request, $id) {
        echo "Sub category will be from here<br>";
        echo "Id ==" . $id;
    }

    public function fetch_sub_category(Request $request) {
//        echo $request->category_id;
        $sub_category = Sub_categories::where('category_id', $request->category_id)->get();
        if ($sub_category != null) {
            return $sub_category;
        }
    }

}