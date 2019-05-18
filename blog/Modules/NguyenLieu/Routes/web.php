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

Route::prefix('nguyenlieu')->group(function() {
    Route::get('/danhsachnguyenlieu', 'NguyenLieuController@index');
	Route::get('/themnguyenlieu', 'NguyenLieuController@create');
	Route::get('/thongtinnguyenlieu/{id}', 'NguyenLieuController@profile');
	Route::get('/capnhatnguyenlieu/{id}', 'NguyenLieuController@edit');
});
