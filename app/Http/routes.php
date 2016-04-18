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

Route::get('/', [
    'uses' => 'MainController@index',
    'as' => 'index',
    'middleware' => ['guest'],
]);


Route::get('register', [
    'uses' => 'AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);

Route::post('register', [
    'uses' => 'AuthController@doRegister',
    'middleware' => ['guest'],
]);


Route::get('login', [
    'uses' => 'AuthController@getLogin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],

]);

Route::post('login', [
    'uses' => 'AuthController@doLogin',
    'middleware' => ['guest'],

]);


Route::get('logout', [
    'uses' => 'AuthController@logout',
    'as' => 'auth.signout',
]);

Route::get('home', 'MainController@home');

Route::get('buy', 'MainController@buy');

Route::get('sell', 'MainController@sell');

Route::get('/user/profile', 'UserController@profile');

Route::get('/user/preference', 'UserController@settings');

Route::get('/account/sold', 'AccountController@sold');
Route::get('/account/bought', 'AccountController@bought');
Route::get('/account/wishlist', 'AccountController@wishlist');

