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

Route::prefix('chitiethoadongoimon')->group(function() {
    Route::group(['middleware' => ['CheckRole:QuanLyVaThuNgan']], function () {
        Route::get('/', 'ChiTietHoaDonGoiMonController@index');
        Route::get('/{id}', 'ChiTietHoaDonGoiMonController@index');
    });
});

