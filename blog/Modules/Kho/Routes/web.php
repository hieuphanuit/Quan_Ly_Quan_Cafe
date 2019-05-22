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
		Route::get('/create', 'KhoController@create');
		Route::get('/{id}', 'KhoController@profile');
		Route::get('/{id}/edit', 'KhoController@edit');
	});
});
