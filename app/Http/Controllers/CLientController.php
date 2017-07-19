<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;
use App\Http\Requests;

class CLientController extends Controller {

    public function index() {
        $category=  Categories::all();
        return view('gem/home/index',["category"=>$category]);
    }
    public function login() {
        return view('auth/login');
    }

}
