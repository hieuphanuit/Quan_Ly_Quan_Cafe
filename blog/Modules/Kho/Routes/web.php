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

Route::prefix('kho')->group(function() {
	Route::group(['middleware' => ['CheckRole:QuanLy']], function () {
		Route::get('/', 'KhoController@index');
		Route::get('/capnhatnguyenlieukho/{id}', 'KhoController@edit');
		Route::get('/thongtinnguyenlieukho/{id}', 'KhoController@profile');
		Route::get('/themnguyenlieukho', 'KhoController@create');
		Route::get('/thongtinnguyenlieukho/{id}', 'KhoController@profile');
	});
});
