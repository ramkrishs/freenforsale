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


Route::get('/profile/edit',[
    'uses' =>'UserController@getEdit',
    'as' => 'user.profile',
    'middleware' => ['auth'],
]);

Route::post('/profile/edit',[
    'uses'=> 'UserController@updateProfile',
    'middleware' => ['auth'],
]);


Route::get('/user/{username}',[
    'uses' =>'UserController@getUser',
    'as' => 'profile.index'
]);


Route::get('/products/add',[
   'uses' => 'ProductController@getProduct',
   'as' => 'product.add'
]);

Route::post('/products/add',[
    'uses' => 'ProductController@postProduct',

]);

Route::get('/products/view', [
    'uses' => 'ProductController@getProducts',
    'as' => 'product.view'
]);

Route::get('/products/view/{name}', [
    'uses' => 'ProductController@getProductByProductName',
    'as' => 'product.searchByName'
]);

Route::get('home', 'MainController@home');


//
//Route::get('sell', 'MainController@sell');


Route::get('/user/preference', 'UserController@settings');

Route::get('/account/sold', 'AccountController@sold');
Route::get('/account/bought', 'AccountController@bought');
Route::get('/account/wishlist', 'AccountController@wishlist');

