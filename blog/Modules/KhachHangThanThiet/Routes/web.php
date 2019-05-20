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

Route::prefix('khachhangthanthiet')->group(function () {
	Route::group(['middleware' => ['CheckRole:QuanLyVaThuNgan']], function () {
		Route::get('/danhsachkhachang', 'KhachHangThanThietController@index');
		Route::get('/themkhachhang', 'KhachHangThanThietController@create');
		Route::get('/thongtinkhachhang/{id}', 'KhachHangThanThietController@profile');
		Route::get('/capnhatkhachhang/{id}', 'KhachHangThanThietController@edit');
	});
});
