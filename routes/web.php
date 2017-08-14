<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/myaccount', 'HomeController@index')->name('myaccount');

Route::get('/products' , 'SitesController@products')->name('products');

    Route::post('/products/create', 'ProductController@store');

Route::group(['prefix' => 'admin'], function(){
  Route::group(['middleware'=>'role:admin'], function() {
    Route::resource('/', 'RoleController');
    Route::resource('/users', 'UserController');
    Route::resource('/products', 'ProductController');
    Route::post('/products/create', 'ProductController@store');
  });
});
