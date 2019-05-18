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
    Route::get('/', 'ThongKeController@index');
	Route::get('/thongketheoca', 'ThongKeController@thongketheoca');
	Route::get('/thongketheongay', 'ThongKeController@thongketheongay');
	Route::get('/thongketheothang', 'ThongKeController@thongketheothang');
});
