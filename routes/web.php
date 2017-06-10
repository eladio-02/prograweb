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

Route::get('/','CuponesController@index')->name('cupones');
Route::get('/cupones','CuponesController@index');
Route::get('/cupones/create','CuponesController@create');
Route::post('/cupones/store','CuponesController@store');
Route::get('/cupon/{cuponId}','CuponesController@show');
Route::get('/cupon/edit/{cuponId}','CuponesController@edit');
Route::put('/cupon/update/{cuponId}','CuponesController@update');
Route::get('/cupon/delete/{cuponId}','CuponesController@destroy');

Route::get('/cupon/mail/{id}/{cuponidmail}','CuponesController@sendEmailReminder');



Route::get('/promocion/','PromocionesController@index');
Route::get('/promocion/create','PromocionesController@create');
Route::get('/promocion/{promoId}','PromocionesController@show');
Route::post('/promocion/store','PromocionesController@store');
Route::get('/promocion/edit/{promoId}','PromocionesController@edit');
Route::put('/promocion/update/{promoId}','PromocionesController@update');
Route::get('/promocion/delete/{promoId}','PromocionesController@destroy');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/contact', 'HomeController@contact');
Route::post('/home/sendcontact', 'HomeController@sendContact');
Route::get('/usuarios', 'HomeController@show');
Route::resource('/usuarios/insert', 'HomeController');
Route::get('/usuarios/create', 'HomeController@createUser');
Route::get('/usuarios/{id}/deshabilitar', 'HomeController@destroy');
Route::get('/usuarios/edit/{id}', 'HomeController@edit');
Route::put('/usuarios/edit/{id}', 'HomeController@update');
Auth::routes();