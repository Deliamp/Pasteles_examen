<?php

use App\Article;

Route::get('/', function (){
    return view('inicio');
})->name('inicio');

Route::get('/usuarios', 'UserController@index')->name('users');

// Route::get('/usuarios/detalles', function (){
//     return 'Mostrando el detalle del usuario'.$_GET['id'];

// });

Route::get('/usuarios/nuevo','UserController@create')->name('new_user');

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+')->name('detalle_user');

Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}','WelcomeController');

Route::get('/pasteles', 'PastelController@index');
Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9 ]+');

Route::get('/articulos','ArticlesController@index')->name('todos_los_articulos');
Route::get('/articulos/{id}','ArticlesController@show')->where('id', '[0-9 ]+')->name('detalle_articulo');
Route::get('/articulos/crear','ArticlesController@crear')->name('crear_articulo');
Route::post('/articulos/store','ArticlesController@store')->name('store_articulo');
Route::get('/articulos/edit/{id}','ArticlesController@edit')->name('articulo_editar');
Route::post('/articulos/edit/{id}','ArticlesController@store_edit');
Route::get('/articulos/delete/{id}','ArticlesController@delete')->name('articulo_eliminar');

//Examen Pasteles UwU

Route::get('/deliapasteles','DeliaPastelesController@index')->name('todas_las_recetas');
Route::get('/deliapasteles/{id}','DeliaPastelesController@show')->where('id', '[0-9 ]+')->name('detalle_receta');
Route::get('/deliapasteles/crear','DeliaPastelesController@crear')->name('crear_receta');
Route::post('/deliapasteles/store','DeliaPastelesController@store')->name('store_receta');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

