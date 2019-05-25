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

Route::prefix('chitiethoadonnguyenlieu')->group(function() {
});
Route::get('/hoadonnguyelieu/chitiethoadonnguyenlieu/{id}', 'ChiTietHoaDonNguyenLieuController@index')->middleware('CheckRole:QuanLy');
