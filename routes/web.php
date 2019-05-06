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

//Para crear una nueva ruta, se le da un nombre y un target
Route::get('registro', function () {
    return view('registro.index');
});

//Para crear una nueva ruta, se le da un nombre y un target
Route::get('zoos', 'ZoosController@index')->name('zoos.index');

Route::get('zoos/create', 'ZoosController@create')->name('zoos.create');

//Para crear una ruta a una vista de detalle, vamos a ocupar como referencia el id del elemento
//El elemento {zoo} es una variable que irá definida dentro de la función en el controlador
Route::get('zoos/{zoo}', 'ZoosController@show')->name('zoos.show');

//Esta es la ruta para guardar la info de los formularios
Route::post('zoos', 'ZoosController@store')->name('zoos.store');
