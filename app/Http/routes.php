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
    'as' => 'profile.index',
    'middleware' => ['auth'],

]);

/*...
Product Routes

*/

Route::get('/products/add',[
   'uses' => 'ProductController@getProduct',
   'as' => 'product.add',
   'middleware' => ['auth'],
]);

Route::post('/products/add',[
    'uses' => 'ProductController@postProduct',
    'middleware' => ['auth'],

]);

Route::get('/products/view', [
    'uses' => 'ProductController@getProducts',
    'as' => 'product.view',
    'middleware' => ['auth'],

]);

Route::get('/products/view/myproduct', [
    'uses' => 'AccountController@listMyProduct',
    'as' => 'product.myProduct',
    'middleware' => ['auth'],
]);

Route::get('/products/view/soldproduct', [
    'uses' => 'ProductController@listSoldProduct',
    'as' => 'product.soldProduct',
    'middleware' => ['auth'],
]);

Route::get('/products/view/{name}', [
    'uses' => 'ProductController@getProductByProductName',
    'as' => 'product.searchByName'
]);

Route::get('/products/edit/{name}', [
    'uses' => 'AccountController@getProductByProductName',
    'as' => 'product.edit',
    'middleware' => ['auth'],
]);

Route::post('/products/edit/{name}', [
    'uses' => 'AccountController@editProduct',
    'middleware' => ['auth'],
    
]);


Route::get('/products/delete/{name}', [
    'uses' => 'AccountController@deleteProduct',
    'as' => 'product.delete',
    'middleware' => ['auth'],
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
    'as' => 'product.viewByAz',

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
    'as' => 'user.myproduct',
    'middleware' => ['auth'],

]);


Route::get('/account/bought', [
    'uses'=>'AccountController@bought',
    'as' => 'user.bought',
    'middleware' => ['auth'],

]);

Route::get('/account/sold', [
    'uses'=>'AccountController@sold',
    'as' => 'user.sold',
    'middleware' => ['auth'],

]);

Route::get('/account/wishlist', [
    'uses'=>'AccountController@wishlist',
    'as' => 'user.wishlist',
    'middleware' => ['auth'],

]);



/*...
search Routes

*/
Route::get('/products/search', [
    'uses' => 'ProductController@getProducts',
    'as' => 'product.search'
]);

Route::post('/products/search', [
    'uses' => 'SearchController@getProductsByCombination',

]);

/*...
Interest Routes

*/

Route::get('/products/addInterest/{prodname}', [
    'uses' => 'InterestController@addInterest',
    'as' => 'product.addinterest',
    'middleware' => ['auth'],
]);


Route::get('/products/isInterest/{prodname}', [
    'uses' => 'InterestController@isInterest',
    'as' => 'product.isinterest',
    'middleware' => ['auth'],
]);


Route::get('/products/showInterest', [
    'uses' => 'InterestController@showProduct',
    'as' => 'interest.showProduct',
    'middleware' => ['auth'],
]);


Route::get('/products/showCustomer/{prodname}', [
    'uses' => 'InterestController@showCustomer',
    'as' => 'interest.showCustomer',
    'middleware' => ['auth'],
]);

Route::get('/products/removeInterest/{prodname}', [
    'uses' => 'InterestController@removeInterest',
    'as' => 'product.removeInterest',
    'middleware' => ['auth'],
]);

/*...
wishlist Routes

*/

Route::get('/wishlist/add/{prodname}', [
    'uses' => 'WishlistController@add',
    'as' => 'wishlist.add',
    'middleware' => ['auth'],
]);

Route::get('/wishlist/remove/{prodname}', [
    'uses' => 'WishlistController@remove',
    'as' => 'wishlist.remove',
    'middleware' => ['auth'],
]);


Route::get('/wishlist/view', [
    'uses' => 'WishlistController@showProduct',
    'as' => 'wishlist.view',
    'middleware' => ['auth'],
]);

/*...
Interest Routes

*/

Route::get('/interest/add/{prodname}', [
    'uses' => 'InterestController@addInterest',
    'as' => 'interest.add',
    'middleware' => ['auth'],
]);

Route::get('/interest/remove/{prodname}', [
    'uses' => 'InterestController@remove',
    'as' => 'interest.remove',
    'middleware' => ['auth'],
]);


Route::get('/interest/view/{prodname}', [
    'uses' => 'InterestController@showInterest',
    'as' => 'interest.view',
    'middleware' => ['auth'],
]);


Route::get('/count/{prodname}', [
    'uses' => 'AccountController@productCount',
    'as' => 'interest.count',
    'middleware' => ['auth'],
]);

Route::get('/sell/{prodname}/{buyer}', [
    'uses' => 'ProductController@sellProduct',
    'as' => 'product.sell',
    'middleware' => ['auth'],
]);