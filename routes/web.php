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

//Route::get('/', 'BlogController@index');
Route::get('/', 'publicController@index');
Route::get('/galeria', 'publicController@galeria');
Route::get('adm/galeria', 'Admin\GaleriaController@index');
Route::get('admin/galeria/', 'Admin\GaleriaController@destroy');
Route::get('conteudo/posts/{post}', 'PublicController@conteudop');


Route::get('/posts/{post}', 'BlogController@post');
Route::post('/posts/{post}/comment', 'BlogController@comment')->middleware('auth');

Auth::routes();
Route::get('/profile', 'Auth\\ProfileController@index')->middleware('auth');

Route::get('/home', 'HomeController@index');
Route::get('/publico/posts', 'Admin\PostController@lpostagens');


Route::get('adm/galeria/form', 'Admin\GaleriaController@form');
Route::resource('admin/galeria', 'Admin\GaleriaController');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
    Route::resource('/posts', 'PostController');
    Route::put('/posts/{post}/publish', 'PostController@publish')->middleware('admin');
    Route::resource('/categories', 'CategoryController', ['except' => ['show']]);
    Route::resource('/tags', 'TagController', ['except' => ['show']]);
    Route::resource('/comments', 'CommentController', ['only' => ['index', 'destroy']]);
    Route::resource('/users', 'UserController', ['middleware' => 'admin', 'only' => ['index', 'destroy']]);

});
