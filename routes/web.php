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

Route::get('/cupon', 'BeneficiosController@showCupon');
Route::post('/miperfil/editar', 'HomeController@cambiar');
Route::get('/miperfil', 'HomeController@showPerfil');
Route::get('/eventos', 'BeneficiosController@showEventos');
Route::get('/beneficios' , 'BeneficiosController@showBeneficios');
Route::get('/home/canje/{puntos}', 'HomeController@canjear');
Route::get('/home', 'HomeController@showHome');

Route::post('/datospersonales','DatosController@saveDatos');
Route::get('/datospersonales','DatosController@showForm');

Route::post('/premios','PremiosController@savePremios');
Route::get('/premios','PremiosController@showPremios');
