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

Route::get('/cupones/','CuponesController@index');

Route::get('/cupon/{cuponId}','CuponesController@show');
Route::get('/promocion/','PromocionesController@index');
Route::get('/promocion/{promoId}','PromocionesController@show');