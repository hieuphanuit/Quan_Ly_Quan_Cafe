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

Route::prefix('hoadonnguyenlieu')->group(function() {
	Route::group(['middleware' => ['CheckRole:QuanLy']], function () {
		Route::get('/', 'HoaDonNguyenLieuController@index');
		Route::get('/{id}', 'HoaDonNguyenLieuController@show')->where(['id' => '[0-9]+']);
		Route::get('/create', 'HoaDonNguyenLieuController@create');
		Route::post('/', 'HoaDonNguyenLieuController@store');
	});
});
