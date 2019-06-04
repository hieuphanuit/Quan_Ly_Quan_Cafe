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

Route::prefix('hoadongoimon')->group(function() {
    Route::group(['middleware' => ['CheckRole:QuanLyVaThuNgan']], function () {
        Route::get('/danhsachhoadongoimon', 'HoaDonGoiMonController@index')->name('danhsachhoadongoimon');
        Route::get('/themhoadongoimon', 'HoaDonGoiMonController@create')->middleware('CheckRole:ThuNgan');
        Route::get('/{id}', 'HoaDonGoiMonController@show')->middleware('CheckRole:ThuNgan');
        Route::get('/{id}/export', 'HoaDonGoiMonController@exportPdfHoaDon')->middleware('CheckRole:ThuNgan');
        
        Route::post('/', 'HoaDonGoiMonController@store')->middleware('CheckRole:ThuNgan')->name('hoadongoimon.store');
    });
    
});
