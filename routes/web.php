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


Route::group(['middleware'=>'role:admin'], function() {
  Route::resource('/admin', 'RoleController');
  Route::resource('/products', 'ProductController');
  Route::resource('/users', 'UserController');
});
