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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function () {
    return view('test');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/show', 'HomeController@show')->name('show');

Auth::routes();

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/show', 'HomeController@show')->name('show');

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', 'HomeController@index')->name('home');




// Route::get('/auth/login', 'HomeController@login')->name('login');


Auth::routes();













Route::get('/promotion/list/index', 'PromotionController@promotionIndex')->name('promotion.index');

//Route::get('/media/list/show/{media_id}', 'MediaController@mediaShow')->name('media.show');
Route::get('/promotion/list/show', 'PromotionController@promotionShow')->name('promotion.show');

Route::get('/promotion/list/create', 'PromotionController@promotionCreate')->name('promotion.create');
Route::post('/promotion/list/create', 'PromotionController@promotionStore')->name('promotion.store');

Route::get('/promotion/list/{promotion_id}/edit', 'PromotionController@promotionEdit')->name('promotion.edit');
Route::post('/promotion/list/{promotion_id}/edit', 'PromotionController@promotionUpdate')->name('promotion.update');

Route::post('/promotion/list/{promotion_id}/delete', 'PromotionController@promotionDelete')->name('promotion.delete'); 


Route::get('/promotion/ap/show', 'PromotionController@apShow')->name('ap.show');

Route::get('/promotion/ap/create', 'PromotionController@apCreate')->name('ap.create');
Route::post('/promotion/ap/create', 'PromotionController@apStore')->name('ap.store');

Route::get('/promotion/ap/{ap_id}/edit', 'PromotionController@apEdit')->name('ap.edit');
Route::post('/promotion/ap/{ap_id}/edit', 'PromotionController@apUpdate')->name('ap.update');

Route::post('/promotion/ap/{ap_id}/delete', 'PromotionController@apDelete')->name('ap.delete'); 




Route::get('/promotion/budget/index', 'PromotionController@budgetIndex')->name('budget.index');

Route::get('/promotion/budget/create', 'PromotionController@budgetCreate')->name('budget.create');
Route::post('/promotion/budget/create', 'PromotionController@budgetStore')->name('budget.store');

Route::get('/promotion/budget/{budget_id}/edit', 'PromotionController@budgetEdit')->name('budget.edit');
Route::post('/promotion/budget/{budget_id}/edit', 'PromotionController@budgetUpdate')->name('budget.update');

Route::post('/promotion/budget/{budget_id}/delete', 'PromotionController@budgetDelete')->name('budget.delete'); 





Route::get('/products/list/index', 'ProductController@productsIndex')->name('products.index');

//Route::get('/products/list/show/{product_id}', 'ProductController@productsShow')->name('products.show');
Route::get('/products/list/show', 'ProductController@productsShow')->name('products.show');


Route::get('/products/list/create', 'ProductController@productsCreate')->name('products.create');
Route::post('/products/list/create', 'ProductController@productsStore')->name('product.store');

Route::get('/products/list/{product_id}/edit', 'ProductController@productsEdit')->name('pruducts.edit');
Route::post('/products/list/{product_id}/edit', 'ProductController@productsUpdate')->name('products.update');

Route::post('/products/list/{product_id}/delete', 'ProductController@productsDelete')->name('product.delete'); 




Route::get('/products/consumption/index', 'ProductController@consumptionIndex')->name('consumption.index');

//Route::get('/products/consumption/show/{consumption_id}', 'ProductController@consumptionShow')->name('consumption.show');
Route::get('/products/consumption/show', 'ProductController@consumptionShow')->name('consumption.show');


Route::get('/products/consumption/create', 'ProductController@consumptionCreate')->name('consumption.create');
Route::post('/products/consumption/create', 'ProductController@consumptionStore')->name('consumption.store');

Route::get('/products/consumption/{consumption_id}/edit', 'ProductController@consumptionEdit')->name('consumption.edit');
Route::post('/products/consumption/{consumption_id}/edit', 'ProductController@consumptionUpdate')->name('consumption.update');

Route::post('/products/consumption/{consumption_id}/delete', 'ProductController@consumptionDelete')->name('consumption.delete');





Route::get('/products/delivery/index', 'ProductController@deliveryIndex')->name('delivery.index');

//Route::get('/products/consumption/show/{consumption_id}', 'ProductController@consumptionShow')->name('consumption.show');
Route::get('/products/delivery/show', 'ProductController@deliveryShow')->name('delivery.show');


Route::get('/products/delivery/create', 'ProductController@deliveryCreate')->name('delivery.create');
Route::post('/products/delivery/create', 'ProductController@deliveryStore')->name('delivery.store');

Route::get('/products/delivery/{delivery_id}/edit', 'ProductController@deliveryEdit')->name('delivery.edit');
Route::post('/products/delivery/{delivery_id}/edit', 'ProductController@deliveryUpdate')->name('delivery.update');

Route::post('/products/delivery/{delivery_id}/delete', 'ProductController@deliveryDelete')->name('delivery.delete'); 






Route::group(['middleware' => 'auth'], function() {
   

	Route::get('/media/newsletter/index', 'MediaController@newsletterIndex')->name('newsletter.index');

	Route::get('/media/newsletter/show/{id}', 'MediaController@newsletterShow')->name('newsletter.show')->where('id', '[0-9]+');
	Route::get('/media/newsletter/clone/{id}', 'MediaController@newsletterClone')->name('newsletter.clone')->where('id', '[0-9]+');


	Route::get('/media/newsletter/create', 'MediaController@newsletterCreate')->name('newsletter.create');
	Route::post('/media/newsletter/create', 'MediaController@newsletterStore')->name('newsletter.store');





	Route::get('/media/newsletter/edit/{id}', 'MediaController@newsletterEdit')->name('newsletter.edit');
	Route::post('/media/newsletter/edit/{id}', 'MediaController@newsletterUpdate')->name('newsletter.update');

	Route::get('/media/newsletter/delete/{id}', 'MediaController@newsletterDelete')->name('newsletter.delete')->where('id', '[0-9]+');








	Route::post('/media/newsletter/createmap/{id}', 'MediaController@newsletterMapStore')->name('newsletter.storemap')->where('id', '[0-9]+');


	Route::post('/media/newsletter/sortmap/{id}', 'MediaController@newsletterMapSort')->name('newsletter.sortmap');

	Route::get('/media/newsletter/editmap/{newsletter_parts_admin_id}', 'MediaController@newsletterMapEdit')->name('newsletter.editmap');
	Route::post('/media/newsletter/editmap/{newsletter_parts_admin_id}', 'MediaController@newsletterMapUpdate')->name('newsletter.updatemap');

	Route::get('/media/newsletter/deletemap/{newsletter_parts_admin_id}', 'MediaController@newsletterMapDelete')->name('newsletter.deletemap');





	Route::get('/media/newsletter/createparts/{newsletter_parts_admin_id}', 'MediaController@newsletterPartsCreate')->name('newsletter.createparts');
	Route::post('/media/newsletter/createparts/{newsletter_parts_admin_id}', 'MediaController@newsletterPartsStore')->name('newsletter.storeparts');


	Route::get('/media/newsletter/editparts/{newsletter_parts_id}', 'MediaController@newsletterPartsEdit')->name('newsletter.editparts');
	Route::post('/media/newsletter/editparts/{newsletter_parts_id}', 'MediaController@newsletterPartsUpdate')->name('newsletter.updateparts');

	Route::get('/media/newsletter/deleteparts/{newsletter_parts_id}', 'MediaController@newsletterPartsDelete')->name('newsletter.deleteparts');




	Route::get('/media/newsletter/createlink/{newsletter_id}', 'MediaController@newsletterLinkCreate')->name('newsletter.createlink');
	Route::post('/media/newsletter/createlink/{newsletter_id}', 'MediaController@newsletterLinkStore')->name('newsletter.storelink');


	Route::get('/media/newsletter/editlink/{newsletter_link_id}', 'MediaController@newsletterLinkEdit')->name('newsletter.editlink');
	Route::post('/media/newsletter/editlink/{newsletter_link_id}', 'MediaController@newsletterLinkUpdate')->name('newsletter.updatelink');

	Route::get('/media/newsletter/deletelink/{newsletter_link_id}', 'MediaController@newsletterLinkDelete')->name('newsletter.deletelink');



	Route::get('/media/newsletter/preview', 'MediaController@newsletterPreview')->name('newsletter.preview');

	Route::get('/media/newsletter/source_code', 'MediaController@newsletterSourceCode')->name('newsletter.source_code');




	Route::get('/media/directory/index', 'MediaController@DirectoryIndex')->name('directory.index');

	//Route::get('/media/directory/show/{directory_id}', 'MediaController@DirectoryShow')->name('directory.show');
	Route::get('/media/directory/show', 'MediaController@DirectoryShow')->name('directory.show');

	Route::get('/media/directory/create', 'MediaController@DirectoryCreate')->name('directory.create');
	Route::post('/media/directory/create', 'MediaController@DirectoryStore')->name('directory.store');

	Route::get('/media/directory/{directory_id}/edit', 'MediaController@DirectoryEdit')->name('directory.edit');
	Route::post('/media/directory/{directory_id}/edit', 'MediaController@DirectoryUpdate')->name('directory.update');

	Route::post('/media/directory/{directory_id}/delete', 'MediaController@DirectoryDelete')->name('directory.delete');


});







Route::get('/media/movie/index', 'MediaController@movieIndex')->name('movie.index');

Route::get('/media/movie/show/{movie_id}', 'MediaController@movieShow')->name('movie.show');

Route::get('/media/movie/create', 'MediaController@movieCreate')->name('movie.create');
Route::post('/media/movie/create', 'MediaController@movieStore')->name('movie.store');

Route::get('/media/movie/{movie_id}/edit', 'MediaController@movieEdit')->name('movie.edit');
Route::post('/media/movie/{movie_id}/edit', 'MediaController@movieUpdate')->name('movie.update');

Route::post('/media/movie/{movie_id}/delete', 'MediaController@movieDelete')->name('movie.delete'); 






Route::get('/common/users/index', 'CommonController@userIndex')->name('users.index');

Route::get('/common/users/show', 'CommonController@userShow')->name('users.show');

Route::get('/common/users/create', 'CommonController@userCreate')->name('users.create');
Route::post('/common/users/create', 'CommonController@userStore')->name('users.store');

Route::get('/common/users/{user_id}/edit', 'CommonController@userEdit')->name('users.edit');
Route::post('/common/users/{user_id}/edit', 'CommonController@userUpdate')->name('users.update');

Route::post('/common/users/{user_id}/delete', 'CommonController@userDelete')->name('users.delete'); 





Route::get('/common/chat/index', 'CommonController@chatIndex')->name('chat.index');

Route::get('/common/chat/show', 'CommonController@chatShow')->name('chat.show');

Route::get('/common/chat/create', 'CommonController@chatCreate')->name('chat.create');
Route::post('/common/chat/create', 'CommonController@chatStore')->name('chat.store');

Route::get('/common/chat/{chat_id}/edit', 'CommonController@chatEdit')->name('chat.edit');
Route::post('/common/chat/{chat_id}/edit', 'CommonController@chatUpdate')->name('chat.update');

Route::post('/common/chat/{chat_id}/delete', 'CommonController@chatDelete')->name('chat.delete'); 



Route::get('/help/tutorial', function () {
    return view('help.tutorial.index');
});


Route::get('/help/question', function () {
    return view('help.question.index');
});



Route::get('/help/inquiry', function () {
    return view('help.inquiry.index');
});






Route::get('/show', 'MediaController@show')->name('show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
