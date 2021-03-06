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
    return view('home.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Actores
Route::get('/actores', 'ActoresController@index');
Route::get('/actores/{id}', 'ActoresController@show'); //ver detalle de un actor
Route::get('/agregarActor', 'ActoresController@create');
Route::post('/agregarActor', 'ActoresController@store');
Route::delete('/actores/{id}', 'ActoresController@destroy');

//Peliculas
Route::get('/peliculas', 'PeliculasController@index');
Route::get('/topFive', 'PeliculasController@topFive');
Route::get('/rottenFive', 'PeliculasController@rottenFive');
Route::get('/peliculas/{id}', 'PeliculasController@show'); //ver detalle de pelicula
Route::get('/pelicula/{id}/editar', 'PeliculasController@edit');
Route::post('/pelicula/{id}', 'PeliculasController@update');


//Generos
Route::get('/generos', 'GenerosController@index');
Route::get('/generos/{id}', 'GenerosController@show'); //ver detalle de un genero

//Busqueda
Route::get('/buscar', 'BusquedaController@index');
