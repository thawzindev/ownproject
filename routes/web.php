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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::post('/shop', 'ShopController@store')->name('shop.store');


// cart
Route::get('/cart', 'CartController@index')->name('cart.index');