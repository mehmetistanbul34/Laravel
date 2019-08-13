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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', 'PageController@index');
Route::get('/ekle', 'PageController@store');
Route::get('guncelle', 'PageController@update');
Route::get('sil/{id}', 'PageController@destroy');