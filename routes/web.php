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

//criação de rota teste 
Route::get('sites/index', function (){
    return view('sites.index');
});

Route::get('sites/services', function(){
    return view('sites.services');
});

Route::get('sites/tools', function(){
    return view('sites.tools');
});

Route::get('sites/about', function(){
    return view('sites.about');
});

Route::get('sites/create_post', function(){
    return view('sites.create_post');
});


Route::get('/welcome', 'HomeController@test');
Route::get('/home', 'HomeController@test');
Route::get('/form', 'PostController@index');

Route::post('/create','PostController@create')->name('create_post');

Route::get('/show/{id}', 'PostController@show')->name('show_post');

Route::get('/posts', 'PostController@list_posts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
