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

Route::redirect('/','/mascota');
Route::redirect('/home','/');

Route::get('/',  'PinderController@index')->name('miMascot');
Route::get('/mascota/BusquedaAv','PinderController@busquedaAv')->name('BusquedaAv');
Route::get('/mascota/today','PinderController@today')->name('today');
Route::get('/mascota/create','PinderController@create')->name('CrearMascota');
Route::post('/mascota','PinderController@store');
Route::get('/mascota/myPosts','PinderController@userPosts');
Route::get('mascota/myPosts', 'PinderController@userPosts')->name('mascotasMias');

//Borrado//
Route::delete('mascota/{id}', 'PinderController@Delete')
    ->name('posts.Delete');
Route::get('/mascota/{id}','PinderController@show')->name('post');
//////////

Route::post('/comentarios','ComentariosController@store');

Route::get('/accesorios',  'AccesoriosController@index')->name('accesorios');
Route::get('/accesorios/{id}','AccesoriosController@show');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'MessagesController@store');


//Edicion//
Route::get('usuario/editar', 'UserController@edit')->name('editarUsuario');
Route::post('usuario/editar', 'UserController@update');

Route::get('mascota/editMascot/{id}', 'PinderController@edit');
Route::post('mascota/editMascot/{id}', 'PinderController@update');
///////////////

//ADMIN//
Route::get('/admin/usuarios',  'UserController@index')->name('registros');
Route::get('/admin/destroy/{id}', 'UserController@destroy')->name('destroy');

#Route::get('admin/edicion/{id}', 'UserController@editAdmin')->name('editarUsuarioAdmin');
#Route::post('admin/edicion/{id}', 'UserController@updateAdmin');


Route::get('/admin/crearAccesorio','AccesoriosController@create')->name('CrearAccesorio');
Route::post('/admin','AccesoriosController@store');

Route::get('/admin/accesorios',  'AccesoriosController@accesorios')->name('accesorios');
Route::get('/admin/accesoriosBorrar/{id}', 'AccesoriosController@destroy')->name('borrarAccesorio');

Route::get('admin/editarAccesorio/{id}', 'AccesoriosController@edit')->name('editarAccesorioAdmin');
Route::post('admin/editarAccesorio/{id}', 'AccesoriosController@update');

Route::get('/admin/mascotas',  'PinderController@mascotas')->name('mascotas');
Route::get('/admin/mascotasBorrar/{id}', 'PinderController@DeleteAdministrador')->name('borrarMascota');

Route::get('admin/editarMascota/{id}', 'PinderController@editAdministrador')->name('editarMascotaAdmin');
Route::post('admin/editarMascota/{id}', 'PinderController@updateAdministrador');

Auth::routes();


