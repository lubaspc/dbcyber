<?php
Route::get('/',function (){
   return redirect('/admin/work');
})->name('admin_index');
Route::resource('/client','ClientController');
Route::resource('/repair','RepairsController');
Route::resource('/update','UpdateController');
Route::resource('/work','WorkController');
Route::resource('/user','UsersController');
