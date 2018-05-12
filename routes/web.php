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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/games', 'GameController@index')->name('games');

Route::get('/games/create', 'GameController@create');

Route::post('/games', 'GameController@store');

Route::get('/games/delete/{game}','GameController@destroy');

Route::get('/games/{game}', 'GameController@show');

Route::post('/games/{game}/comments', 'CommentController@store');