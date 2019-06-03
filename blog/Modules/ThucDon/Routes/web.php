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

Route::prefix('thucdon')->group(function() {
    Route::get('/', 'ThucDonController@index')->middleware('CheckRole:QuanLyVaThuNgan');
	Route::get('/create', 'ThucDonController@create')->middleware('CheckRole:QuanLy');
	Route::get('/{id}/edit', 'ThucDonController@edit')->middleware('CheckRole:QuanLy');
	Route::post('/{id}/edit', 'ThucDonController@update')->middleware('CheckRole:QuanLy')->where(['id' => '[0-9]+']);
	Route::get('/{id}', 'ThucDonController@show')->middleware('CheckRole:QuanLy')->where(['id' => '[0-9]+']);
	Route::post('/store', 'ThucDonController@store')->middleware('CheckRole:QuanLy')->name('thucdon.store');
	Route::post('/{id}/delete', 'ThucDonController@destroy')->middleware('CheckRole:QuanLy');
});
