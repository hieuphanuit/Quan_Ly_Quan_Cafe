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

Route::prefix('nhanvien')->group(function () {
	Route::group(['middleware' => ['CheckRole:QuanLy']], function () {
		Route::get('/danhsachnhanvien', 'NhanVienController@index');
		Route::get('/themnhanvien', 'NhanVienController@create');
		Route::get('/capnhatnhanvien/{id}', 'NhanVienController@edit');
		Route::get('/thongtinnhanvien/{id}', 'NhanVienController@profile');
	});
});