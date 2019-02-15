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

Route::get('/jukebox', 'JukeboxController@edit');
Route::post('/jukebox', 'JukeboxController@edit');

Route::get('/delete', 'JukeboxController@delete');
Route::post('/delete', 'JukeboxController@delete');

Route::get('/list', 'JukeboxController@listing');
Route::post('/list', 'JukeboxController@listing');

Route::get('/author', 'AuthorController@edit');
Route::post('/author', 'AuthorController@edit');

Route::get('/authors', 'AuthorController@listing');
Route::post('/authors', 'AuthorController@listing');