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
		Route::get('/', 'NhanVienController@index');
		Route::get('/create', 'NhanVienController@create');
		Route::get('/{id}/edit', 'NhanVienController@edit');
		Route::get('/{id}', 'NhanVienController@profile');
		Route::post('/', 'NhanVienController@store')->name('nhanvien.store');
	});
});
