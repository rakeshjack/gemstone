<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('gem/admin/index');
    }

    public function gallery_add() {
        return view('gem/admin/gallery/add/index');
    }

    public function add_categories() {
        return view('gem/admin/category/add/index');
    }

}
