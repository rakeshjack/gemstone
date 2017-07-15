<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/login', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| GEMSTONE Home Page
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('gem/home/index');
});
/*
|--------------------------------------------------------------------------
| GEMSTONE Home Page
|--------------------------------------------------------------------------
*/
Route::get('/about', function () {
    return view('gem/about/index');
});
/*
|--------------------------------------------------------------------------
| GEMSTONE Gallery Page
|--------------------------------------------------------------------------
*/
Route::get('/gallery', function () {
    return view('gem/gallery/index');
});
/*
|--------------------------------------------------------------------------
| GEMSTONE Jewellery Page
|--------------------------------------------------------------------------
*/
Route::get('/jewellery', function () {
    return view('gem/jewelry/index');
});
/*
|--------------------------------------------------------------------------
| GEMSTONE Jewellery Page
|--------------------------------------------------------------------------
*/
Route::get('/goldcoins', function () {
    return view('gem/coins/index');
});
Route::auth();

Route::get('/home', 'HomeController@index');
