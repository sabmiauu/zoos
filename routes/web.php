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

//-------------------------Zoos Routes-------------------------

//Para crear una nueva ruta, se le da un nombre y un target
Route::get('registro', function () {
    return view('registro.index');
});
//Para crear una nueva ruta, se le da un nombre y un target
Route::get('zoos', 'ZoosController@index')->name('zoos.index');
//Ésta es la ruta para crear un elemento
Route::get('zoos/create', 'ZoosController@create')->name('zoos.create');
//Ésta es la ruta para poder editar un elemento ya creado
Route::get('zoos/{zoo}/edit', 'ZoosController@edit')->name('zoos.edit');
//Para crear una ruta a una vista de detalle, vamos a ocupar como referencia el id del elemento
//El elemento {zoo} es una variable que irá definida dentro de la función en el controlador
Route::get('zoos/{zoo}', 'ZoosController@show')->name('zoos.show');
//Esta es la ruta para guardar la info de los formularios
Route::post('zoos', 'ZoosController@store')->name('zoos.store');
//Con el método PUT se hace la ruta para actualizar los datos
Route::put('zoos/{zoo}', 'ZoosController@update')->name('zoos.update');
//Con el método DELETE creamos la ruta para eliminar un dato
Route::delete('zoos/{zoo}', 'ZoosController@delete')->name('zoos.delete');
//GET se usa para consultas, obtener vistas
//POST se usa para enviar los datos y guardarlos como elemento nuevo
//PUT se usa para enviar los datos de un elemento ya creado y actualizarlos

//-------------------------Species Routes-------------------------

Route::get('species', 'SpeciesController@index')->name('species.index');
//CREAR
Route::get('species/create', 'SpeciesController@create')->name('species.create');
//GUARDAR
Route::post('species', 'SpeciesController@store')->name('species.store');
//DETALLE
Route::get('species/{species}', 'SpeciesController@show')->name('species.show');
