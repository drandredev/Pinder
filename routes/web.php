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

Route::get('/',  'PinderController@index');
Route::get('/busqueda',  'PinderController@busqueda');
Route::get('/posts/{id}','PinderController@show');


Route::get('/accesorios',  'AccesoriosController@index');
Route::get('/acces/{id}','AccesoriosController@show');

Auth::routes();

Route::get('/home', 'PinderController@index')->name('home');
