<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#Route::get('users', 'UsersController@index');
#Route::get('users/{username}', 'UsersController@show');

Route::get('/', 'PagesController@home');
#Route::get('/sessions/create', 'SessionsController@create');
#Route::get('/users/nAccnt', 'UsersController@nAccnt');

Route::resource('users', 'UsersController');

#Route::resource('sessions', 'SessionsController');

