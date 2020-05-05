<?php

Route::get('/', function () {   return view('welcome'); });

Route::get('_oauth/{driver}' , 'Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback' , 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/inicio', 'ViewsController@initial');
Route::get('/tienda', 'ViewsController@tienda');
Route::get('/detail/{id}', 'ViewsController@detail');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/productos', 'ProductosController');
Route::post('/productos/dropzoneFrom', 'ProductosController@dropzoneFrom');
Route::post('/productos/dropzonedelete', 'ProductosController@dropzonedelete');
