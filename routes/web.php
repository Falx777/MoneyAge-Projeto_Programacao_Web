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

/**Para redirecionar uma página para outra:
Route::get('nome da rota', function (){
    return redirect('nome da rota para ser redirecionada');
});

ou

Route::redirect('nome da rota','nome da rota para ser redirecionada');
**/

Route::get('sites/index', function (){
    return view('sites.index');
});

//rota de cadastro criada.
Route::get('sites/signup', function (){
    return view('sites.signup');
});

//rota de login criada.
Route::get('sites/login', function (){
    return view('sites.login');
});
//rota para criar usuário
Route::post('/create','MoneyageController@create')->name('create_user');

//rota para verificar usuário
Route::post('/verify','MoneyageController@verify')->name('verify_user');

//rota para usuário logado
Route::post('/logged','MoneyageController@logged')->name('logged_user');

//rota para cadastrar usuário
Route::get('sites/signup', function (){
    return view('sites.signup');
});

Route::get('sites/home/', function (){
    return view('sites.home');
});

Route::get('sites/about', function (){
    return view('sites.about');
})->middleware('auth');

Route::get('sites/show_table/{id}', 'MoneyageController@show')->name('show_table')->middleware('auth');

Route::get('sites/edit_table/{id}', 'MoneyageController@edit')->name('edit_table')->middleware('auth');

Route::get('sites/creating_table', 'MoneyageController@new_table')->name('create_table')->middleware('auth');

Route::post('sites/creating_table', 'MoneyageController@create_table')->name('creating_table')->middleware('auth');

Route::match(['put', 'patch'],'sites/edit_table/{id}', 'MoneyageController@update')->name('update')->middleware('auth');

Route::post('sites/show_table_name', 'MoneyageController@show_table_name')->name('show_table_name')->middleware('auth');

Route::post('sites/verify_id_tables', 'MoneyageController@verify_id_tables')->name('verify_id_tables')->middleware('auth');

Route::post('sites/compare', 'MoneyageController@compare_values')->name('compare_values')->middleware('auth');

Route::get('compare/{id}/{name}/{value}', 'MoneyageController@add_to_table')->name('add_to_table')->middleware('auth');

Route::post('sites/about', 'MoneyageController@update_wage')->name('update_wage')->middleware('auth');

Route::get('sites/home', 'MoneyageController@eco')->name('eco')->middleware('auth');


Route::put('opinion', 'MoneyageController@opinion')->name('post_opinion')->middleware('auth');

Route::get('sites/create_post', function(){
    return view('sites.create_post');
})->middleware('auth');

Route::get('sites/compare', function(){
    return view('sites.compare');
})->middleware('auth');

Route::get('/welcome', 'HomeController@test');
Route::get('/home', 'HomeController@test');
//Route::get('/form', 'PostController@index');

//Route::post('/create','PostController@create')->name('create_post');

//Route::get('/show/{id}', 'PostController@show')->name('show_post');

//Route::get('/posts', 'PostController@list_posts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//NOVAS ROTAS

Route::get('/home/{id}', 'MoneyageController@delete')->name('delete_table');

Route::delete('sites/about/{id}', 'MoneyageController@delete_account')->name('delete_account')->middleware('auth');



 












