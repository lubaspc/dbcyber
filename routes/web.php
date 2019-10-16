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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/typeTeam','TypeTeamController');
Route::resource('/admin/brand','BrandController');
Route::resource('/admin/client','ClientController');
Route::resource('/admin/product','ProductController');
Route::resource('/admin/repair','RepairsController');
Route::resource('/admin/update','UpdateController');
Route::resource('/admin/work','WorkController');
Route::resource('/admin/user','UsersController');

Route::view('/admin','admin.type_brand.index');
