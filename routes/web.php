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

Route::post('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');
Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@destroy');

