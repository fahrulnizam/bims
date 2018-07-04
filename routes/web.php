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

Route::get('', 'BuildingController@index')->name('dashboard');

Route::get('details/{id}', 'BuildingController@show')->name('details');
Route::get('add', 'BuildingController@create')->name('add');
Route::post('save', 'BuildingController@store')->name('save');
Route::get('edit/{id}', 'BuildingController@edit')->name('edit');
Route::post('update/{id}', 'BuildingController@update')->name('update');
Route::delete('delete/{id}', 'BuildingController@destroy')->name('delete');

