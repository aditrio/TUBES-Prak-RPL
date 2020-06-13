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
Route::get('/','TestController@test');
Route::get('/data-provinsi','TestController@provinsi');
Route::get('/data-dunia','TestController@global');
Route::get('/grafik-provinsi','TestController@grafikprovinsi');
Route::get('/grafik-dunia','TestController@grafikdunia');