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

Auth::routes();

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}/update', 'ProfilesController@update')->name('profile.update');
Route::get('/profile/{user}', 'ProfilesController@view')->name('profile.view');


Route::post('/posts', 'PostsController@store')->name('posts.store');
Route::get('/post/create', 'PostsController@create')->name('post.create');
Route::get('/post/{post}', 'PostsController@view')->name('post.view');


Route::get('/home', 'HomeController@index')->name('home');
