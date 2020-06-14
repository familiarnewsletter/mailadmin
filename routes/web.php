<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/layout', function () {
    return view('layout');
});

Auth::routes();

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'HomeController@index')->name('home');


Route::get('/owner/shops', 'ShopController@indexForOwner')->name('shops.index');

Route::get('/shops/create', 'ShopController@create')->name('shops.create');
Route::post('/shops/create', 'ShopController@store')->name('shops.store');


Route::get('/shops/{shop_name}', 'ShopController@show')->name('shops.show');


Route::get('/shops/{shop_name}/edit', 'ShopController@edit')->name('shops.edit');
Route::post('/shops/{shop_name}/edit', 'ShopController@update')->name('shops.update');

Route::post('/shops/{shop_name}/', 'ShopController@delete')->name('shops.delete'); 



Route::get('/shops/{shop_name}/menus', 'MenuController@index')->name('menus.index');

Route::get('/{shop_name}/menus/create', 'MenuController@create')->name('menus.create');
Route::post('/{shop_name}/menus/create', 'MenuController@store')->name('menus.store');

Route::get('/{menu_name}', 'MenuController@show')->name('menus.show');


Route::get('/{menu_name}/edit', 'MenuController@edit')->name('menus.edit');
Route::post('/{menu_name}/edit', 'MenuController@update')->name('menus.update');

Route::post('/{menu_name}', 'MenuController@delete')->name('menus.delete');





Route::get('/{user_name}/orders', 'OrderController@indexForUser')->name('orders.indexforuser');

Route::get('/{shop_name}/orders', 'OrderController@indexForShop')->name('orders.indexforshop');


Route::get('/order/{order_id}/detail', 'OrderController@show')->name('orders.show');

Route::get('/orders//{menu_id}create', 'OrderController@create')->name('orders.create');
Route::post('/orders//{menu_id}create', 'OrderController@store')->name('orders.store');

Route::get('/order/{order_id}/edit', 'OrderController@edit')->name('orders.edit');
Route::post('/order//{order_id}/edit', 'OrderController@update')->name('orders.update');

Route::post('/order/{order_id}', 'OrderController@delete')->name('orders.delete');
