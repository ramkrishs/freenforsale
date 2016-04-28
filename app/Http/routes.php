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
/*...
Login Routes

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

/*...
Profile Routes

*/


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

/*...
Product Routes

*/

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

Route::get('/products/view/myproduct', [
    'uses' => 'AccountController@listMyProduct',
    'as' => 'product.myProduct'
]);

Route::get('/products/view/soldproduct', [
    'uses' => 'ProductController@listSoldProduct',
    'as' => 'product.soldProduct'
]);

Route::get('/products/view/{name}', [
    'uses' => 'ProductController@getProductByProductName',
    'as' => 'product.searchByName'
]);

Route::get('/products/edit/{name}', [
    'uses' => 'AccountController@getProductByProductName',
    'as' => 'product.edit'
]);

Route::post('/products/edit/{name}', [
    'uses' => 'AccountController@editProduct',
    
]);


Route::get('/products/delete/{name}', [
    'uses' => 'AccountController@deleteProduct',
    'as' => 'product.delete'
]);

Route::get('/products/restore/{name}', [
    'uses' => 'AccountController@restoreProduct',
    'as' => 'product.restore'
]);

Route::get('home', [
    'uses' => 'MainController@home',
    'as' => 'home'
]);

Route::get('/products/viewbyAs', [
    'uses' => 'ProductController@getProductsByName',
    'as' => 'product.viewByAz'
]);

Route::get('/products/viewbyDs', [
    'uses' => 'ProductController@getProductsByNameinDesc',
    'as' => 'product.viewByzA'
]);

Route::get('/products/viewbyPrice', [
    'uses' => 'ProductController@getProductsByPrice',
    'as' => 'product.viewBylh'
]);

Route::get('/products/viewbyPriceDs', [
    'uses' => 'ProductController@getProductsByPriceinDesc',
    'as' => 'product.viewByhl'
]);


Route::get('/account/products', [
    'uses'=>'AccountController@listMyProduct',
    'as' => 'user.myproduct'

]);


Route::get('/account/bought', [
    'uses'=>'AccountController@bought',
    'as' => 'user.bought'

]);

Route::get('/account/sold', [
    'uses'=>'AccountController@sold',
    'as' => 'user.sold'

]);

Route::get('/account/wishlist', 'AccountController@wishlist');

/*...
search Routes

*/
Route::get('/products/search', [
    'uses' => 'ProductController@getProducts',
    'as' => 'product.search'
]);

Route::post('/products/search', [
    'uses' => 'SearchController@getProductsByKeyword',

]);


