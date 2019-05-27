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

Route::prefix('nguyenlieu')->group(function() {
	Route::group(['middleware' => ['CheckRole:QuanLy']], function () {
		Route::get('/', 'NguyenLieuController@index')->name('nguyenlieu.index');
		Route::get('/create', 'NguyenLieuController@create')->name('nguyenlieu.create');
		Route::post('/', 'NguyenLieuController@store')->name('nguyenlieu.store');
	});
});
