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
		Route::get('/', 'KhachHangThanThietController@index');
		Route::get('/create', 'KhachHangThanThietController@create');
		Route::post('/', 'KhachHangThanThietController@store')->name('khachhangthanthiet.store');
		Route::get('/{id}', 'KhachHangThanThietController@show');
		Route::get('/{id}/edit', 'KhachHangThanThietController@edit');
		Route::post('/{id}/edit', 'KhachHangThanThietController@update');
		Route::post('/{id}/delete','KhachHangThanThietController@destroy');
		Route::post('/search','KhachHangThanThietController@search');
	});
});
