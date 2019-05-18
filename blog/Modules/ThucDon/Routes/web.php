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

Route::prefix('thucdon')->group(function() {
    Route::get('/danhsachthucdon', 'ThucDonController@index');
	Route::get('/themthucdon', 'ThucDonController@create');
	Route::get('/capnhatthucdon/{id}', 'ThucDonController@edit');
	Route::get('/thongtinthucdon/{id}', 'ThucDonController@profile');
});
