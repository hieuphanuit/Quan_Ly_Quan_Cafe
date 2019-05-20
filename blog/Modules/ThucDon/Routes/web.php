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
    Route::get('/danhsachthucdon', 'ThucDonController@index')->middleware('CheckRole:QuanLyVaThuNgan');
	Route::get('/themthucdon', 'ThucDonController@create')->middleware('CheckRole:QuanLy');
	Route::get('/capnhatthucdon/{id}', 'ThucDonController@edit')->middleware('CheckRole:QuanLy');
	Route::get('/thongtinthucdon/{id}', 'ThucDonController@profile')->middleware('CheckRole:QuanLy');
});
