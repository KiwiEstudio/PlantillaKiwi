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

Route::get('inicio','SitioWebController@inicio');
Route::get('timeline','SitioWebController@timeline');
Route::get('about','SitioWebController@about');
Route::get('contact','SitioWebController@contact');
Route::get('paquete','SitioWebController@paquete');
