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

Route::get('', 'CollectionController@index');
Route::get('create', 'CollectionController@create');
Route::post('store', 'CollectionController@store');
Route::get('{id}', 'CollectionController@show');
Route::get('{id}/edit', 'CollectionController@edit');
Route::put('{id}', 'CollectionController@update');
Route::delete('{id}', 'CollectionController@destroy');
