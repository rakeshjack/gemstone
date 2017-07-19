<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class CLientController extends Controller {

    public function index() {
        return view('gem/home/index');
    }

}
