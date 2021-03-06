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

Route::prefix('thongke')->group(function() {
	Route::group(['middleware' => ['CheckRole:QuanLyVaThuNgan']], function () {
		Route::get('/thongketheoca', 'ThongKeController@thongketheoca')->name('thongketheoca');
	});
	Route::group(['middleware' => ['CheckRole:QuanLy']], function () {
		Route::get('/thongketheongay', 'ThongKeController@thongketheongay')->name('thongketheongay');
		Route::get('/thongketheothang', 'ThongKeController@thongketheothang');
		Route::get('/exportPDFThongKeCa', 'ThongKeController@exportPDFThongKeCa');
		Route::get('/exportPDFThongKeNgay', 'ThongKeController@thongketheongay')->name('thongketheongay.create');
		Route::get('/exportPDFThongKeThang', 'ThongKeController@exportPDFThongKeThang');
		Route::get('/exportPDFThongKeCa', 'ThongKeController@exportPDFThongKeCa')->name('thongketheoca.create');
		Route::get('/', 'ThongKeController@search')->name('thongketheoca.search');
	});
});
