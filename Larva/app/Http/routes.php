<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('/', 'WelcomeController@index');

Route::resource('home', 'HomeController');

Route::resource('user', 'UserController');

Route::resource('games', 'GamesController');

//Route::get('home', 'HomeController@index');
//
//Route::get('user', 'HomeController@user');
//Route::get('user', 'UserController@index');
//
//Route::get('games', 'GamesController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
