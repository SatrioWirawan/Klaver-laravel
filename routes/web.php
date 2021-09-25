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

Route::get('/', 'mainController@index');

Route::get('/contact', 'mainController@contact');

Route::get('/product', 'mainController@product');

// product

Route::get('/product/baloon', 'productController@baloon');

Route::get('/product/abstract', 'productController@abstract');

Route::get('/product/loose', 'productController@loose');

Route::get('/product/pocket', 'productController@pocket');