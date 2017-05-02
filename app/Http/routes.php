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

Route::get('/', 'HomeController@showWelcome');


Route::get('/account', 'HomeController@showAccount');


Route::get('/sayhello/{name?}', 'HomeController@sayHello');


Route::get('/uppercase/{word?}', 'HomeController@uppercase');


Route::get('/increment/{num?}', 'HomeController@increment');


Route::get('/add/{num1?}/{num2?}', 'ExampleController@add');


Route::get('/rolldice/{guess?}', 'ExampleController@rollDice');


Route::resource('posts', 'PostsController');


// Authentication routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');