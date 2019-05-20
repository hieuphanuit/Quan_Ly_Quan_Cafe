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

Route::prefix('hoadon')->group(function() {
    Route::get('/danhsachhoadon', 'HoaDonController@index');
	Route::get('/themhoadon', 'HoaDonController@create');
});