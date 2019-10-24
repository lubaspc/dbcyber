<?php
Route::get('/',function (){
   return redirect('/admin/work');
})->name('admin_index');
Route::resource('/client','ClientController');
Route::get('client/{clientId}/active',
    'ClientController@active')
    ->name('client_active');

Route::resource('/repair','RepairsController');
Route::get('repair/{repairId}/active',
    'RepairsController@active')
    ->name('repair_active');

Route::resource('/update','UpdateController');

Route::resource('/work','WorkController');
Route::get('work/{workId}/active',
    'WorkController@active')
    ->name('work_active');

Route::resource('/user','UsersController');
Route::get('user/{userId}/active',
    'UsersController@active')
    ->name('user_active');
