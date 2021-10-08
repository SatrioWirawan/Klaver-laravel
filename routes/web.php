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

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/', 'mainController@index');

Route::get('/contact', 'mainController@contact');

Route::get('/product', 'mainController@product');

Route::get('/login', function(){
    return view ('account.login');
});

Route::get('/signup', function(){
    return view ('account.signup');
});

Route::get('/checkout', function(){
    return view ('checkout.checkout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'adminController@index');

Route::get('/product/create', 'adminController@create');

Route::post('/admin', 'adminController@store');

Route::get('/product/{detail_product_id}', 'adminController@show');

Route::get('/product/{detail_product_id}/edit', 'adminController@edit');

Route::put('/admin/{detail_product_id}', 'adminController@update');

Route::delete('/product/{detail_product_id}', 'adminController@destroy');

// category
Route::get('/category', 'categoryController@index');

Route::get('/category/create', 'categoryController@create');

Route::post('/category', 'categoryController@store');

Route::get('/category/{category_id}', 'categoryController@show');

Route::get('/category/{category_id}/edit', 'categoryController@edit');

Route::put('/category/{category_id}', 'categoryController@update');

Route::delete('/category/{category_id}', 'categoryController@destroy');
});

// admin


// product
Route::get('/product/{detail_product_id}', 'productController@show');

// Route::get('/product/abstract', 'productController@abstract');

// Route::get('/product/loose', 'productController@loose');

// Route::get('/product/pocket', 'productController@pocket');

Route::get('/blank', function(){
    return view ('layout.dashboard');
}); 

Route::get('/profile', 'profileController@index');

// user
// Route::resource('user', 'userController');

Route::get('/users', 'userController@index');

Route::get('/users/create', 'userController@create');

Route::post('/users', 'userController@store');

Route::get('/users/{users_id}', 'userController@show');

Route::get('/users/{users_id}/edit', 'userController@edit');

Route::put('/users/{users_id}', 'userController@update');

Route::delete('/users/{users_id}', 'userController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
