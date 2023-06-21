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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PageController@home');
Route::post('/tampil', 'PageController@tampil');
Route::Get('/no3', 'PageController@no3');
Route::get('/tampil3', 'PageController@tampilNo3');
Route::get('/tampil2', 'PageController@tampil2');
Route::get('/greet', 'PageController@greeting' );
