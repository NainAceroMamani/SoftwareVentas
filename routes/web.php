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

Route::get('_oauth/{driver}' , 'Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback' , 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/productos', 'ProductosController');
Route::post('/productos/dropzoneFrom', 'ProductosController@dropzoneFrom');
Route::post('/productos/dropzonedelete', 'ProductosController@dropzonedelete');
