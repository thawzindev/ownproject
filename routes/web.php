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
Route::delete('/cart/remove/{id}', 'CartController@remove')->name('cart.remove');

// checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');

//one to many test
Route::get('/employee','EmployeeController@index')->name('employee.index');

// Route::resource('employee', 'EmployeeController');

Route::get('/bus', 'BusController@index')->name('bus.index');
Route::get('/select_bus', 'BusController@select')->name('bus.select');
Route::get('/seats', 'BusController@seats')->name('bus.seats');
Route::get('/customer', 'BusController@customer')->name('bus.customer');
Route::get('/customer/guest', 'BusController@guest')->name('bus.guest');