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
use App\Categories;
//Route::get('/login', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| GEMSTONE LOGIN Section
|--------------------------------------------------------------------------
*/
Route::get('/gemstone-admin-login','ClientController@login');
Route::get('/main-page','ClientController@index');
Route::get('/', function () {
    $user = Auth::user();
    if ($user != null) {
        if ($user->isAdmin()) {
            return view('gem/admin/index');
        }
    }
    return redirect('/main-page');
});


Route::get('/category-drop','ClientController@category_lists');
Route::get('/get-category/{id}','ClientController@get');
Route::get('get-sub-category/{id}','ClientController@get_sub_category');
/*
|--------------------------------------------------------------------------
| GEMSTONE Home Page
|--------------------------------------------------------------------------
*/
Route::get('/about', function () {
    $category =  Categories::with(array('sub_categorys'))->get();
    return view('gem/about/index',["category"=>$category]);
});
/*
|--------------------------------------------------------------------------
| GEMSTONE Jewellery Page
|--------------------------------------------------------------------------
*/
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/galleryview', 'AdminController@index');
Route::get('/gallery-add', 'AdminController@gallery_add');
Route::get('/add-categories','AdminController@add_categories');
Route::resource('/store','CategoryController@store');
Route::resource('/show','CategoryController@show');
Route::resource('/edit_page','CategoryController@edit_page');
Route::resource('/category-update','CategoryController@category_update');
Route::resource('/category-destroy','CategoryController@category_destroy');
Route::resource('/subcategory','SubCategoryController');
Route::resource('/sub-category-add','SubCategoryController@sub_category_add');
Route::resource('/sub-category-insert','SubCategoryController@store');
Route::resource('/sub-category-update','SubCategoryController@update');
Route::resource('/sub-category-destroy','SubCategoryController@destroy');
Route::resource('/page','PageController');
Route::resource('/add-page','PageController@create');
Route::resource('/add-page-insert','PageController@store');
Route::resource('/show-page','PageController@show');
Route::resource('/page-destroy','PageController@destroy');
Route::resource('/page-update','PageController@update');