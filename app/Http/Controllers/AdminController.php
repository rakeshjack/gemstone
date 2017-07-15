<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller {
    public function index() {
        return view('gem/admin/index');
    }
    public function gallery_add() {
        return view('gem/admin/gallery/add/index');
    }
}
