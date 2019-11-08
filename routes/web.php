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

Route::get('/', 'PostsController@index');
Route::get('/post/new', 'PostsController@create');
Route::get('/post/{id}', 'PostsController@show');
Route::post('/post/store', 'PostsController@store');
Route::post('/post/update/{id}', 'PostsController@update');
Route::get('/post/delete/{id}', 'PostsController@destroy');
