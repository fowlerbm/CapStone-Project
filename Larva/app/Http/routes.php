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

//final test

Route::get('/', 'HomeController@index');

Route::resource('home', 'HomeController');

Route::resource('user', 'UserController');

Route::resource('games', 'GamesController');

Route::resource('addGames', 'AddGamesController');

Route::resource('search', 'SearchController');

Route::resource('forum', 'ForumController');

Route::resource('random', 'RandomController');






Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
