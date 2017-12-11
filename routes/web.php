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
    Route::resource('posts', 'PostsController');
    Route::get('/posts', 'PostsController@getIndex')->name('post');
    Route::get('/posts/show/{id}', 'PostsController@getShow');
    Route::get('/posts/create', 'PostsController@getCreate');
    Route::post('/posts/create', 'PostsController@postCreate');
    Route::get('/posts/edit/{id}', 'PostsController@getEdit');
    Route::post('/posts/edit/{id}', 'PostsController@postEdit');
    Route::post('/posts/delete/{id}', 'PostsController@postDelete');

