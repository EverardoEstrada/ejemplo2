<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/','InicioController@index');

Route::get('/dashboard','HomeController@index');

Route::get('/pedidos','HomeController@pedidos');
Route::post('/pedidos','HomeController@pedidos');

Route::post('/pedidos/{id}','HomeController@detallepedidos');
Route::get('/pedidos/{id}','HomeController@detallepedidos');

Route::post('/guardapedido','HomeController@guardapedido');
Route::post('/borra/{id}','HomeController@borra');



