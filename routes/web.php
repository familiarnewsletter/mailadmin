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




Route::get('/shops/lists/index', 'ShopController@shopIndex')->name('shops.index');

Route::get('/shops/lists/show/{shop_id}', 'ShopController@shopShow')->name('shops.show');

Route::get('/shops/lists/create', 'ShopController@shopCreate')->name('shops.create');
Route::post('/shops/lists/create', 'ShopController@shopStore')->name('shops.store');

Route::get('/shops/lists/{shop_id}/edit', 'ShopController@shopEdit')->name('shops.edit');
Route::post('/shops/lists/{shop_id}/edit', 'ShopController@shopUpdate')->name('shops.update');

Route::post('/shops/lists/{shop_id}/delete', 'ShopController@shopDelete')->name('shops.delete'); 



// Route::get('/shop_stock/index', 'ShopController@stockIndex')->name('shop_stock.index');

// Route::get('/shop_stock/show/{shop_id}', 'ShopController@stockShow')->name('shop_stock.show');

// Route::get('/shop_stock/create', 'ShopController@stockCreate')->name('shop_stock.create');
// Route::post('/shop_stock/create', 'ShopController@stockStore')->name('shop_stock.store');

// Route::get('/shop_stock/{shop_id}/edit', 'ShopController@stockEdit')->name('shop_stock.edit');
// Route::post('/shop_stock/{shop_id}/edit', 'ShopController@stockUpdate')->name('shop_stock.update');

// Route::post('/shop_stock/{shop_id}/', 'ShopController@stockDelete')->name('shop_stock.delete'); 



Route::get('/shop/orders/index', 'ShopController@orderIndex')->name('shop_orders.index');

Route::get('/shop/orders/show/{shop_id}', 'ShopController@orderShow')->name('shop_orders.show');

Route::get('/shop/orders/create', 'ShopController@orderCreate')->name('shop_orders.create');
Route::post('/shop/orders/create', 'ShopController@orderStore')->name('shop_orders.store');

Route::get('/shop/orders/{shop_id}/edit/{shop_order_id}', 'ShopController@orderEdit')->name('shop_orders.edit');
Route::post('/shop/orders/{shop_id}/edit/{shop_order_id}', 'ShopController@orderUpdate')->name('shop_orders.update');

Route::post('/shop/orders/{shop_id}/delete/{shop_order_id}', 'ShopController@orderDelete')->name('shop_orders.delete'); 




Route::get('/corporations/clients/index', 'CorporationController@clientIndex')->name('corporation_client.index');

Route::get('/corporations/clients/show/{corporation_id}', 'CorporationController@clientShow')->name('corporation_client.show');

Route::get('/corporations/clients/create', 'CorporationController@clientCreate')->name('corporation_client.create');
Route::post('/shops/create', 'CorporationController@clientStore')->name('corporation_client.store');

Route::get('/corporations/clients/{corporation_id}/edit', 'CorporationController@clientEdit')->name('corporation_client.edit');
Route::post('/corporations/clients/{corporation_id}/edit', 'CorporationController@clientUpdate')->name('corporation_client.update');

Route::post('/corporations/clients/{corporation_id}/delete', 'CorporationController@clientDelete')->name('corporation_client.delete'); 











