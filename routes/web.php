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
    return redirect('/client');
})->name('home');

//      Route::auth();

Route::get('/client',
    'ClienteController@index'
)->name('client_index');

Route::post('/client/check',
    'ClienteController@check'
)->name('client_check');

Route::post('login',
    'Auth\LoginController@login');

Route::get('login',
    'Auth\LoginController@showLoginForm')
    ->name('login');

Route::post('logout',
    'Auth\LoginController@logout')
    ->name('logout');

