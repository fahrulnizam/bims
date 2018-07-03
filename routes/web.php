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

Route::middleware('auth')->group(function () {

	Route::get('', 'BuildingController@index')->name('dashboard');

	Route::get('details/{id}', 'BuildingController@show')->name('details');
	Route::post('save', 'BuildingController@store')->name('save');

});

Auth::routes();
