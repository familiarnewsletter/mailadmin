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

	Route::get('/media/newsletter/text/{newsletter_id}', 'MediaController@newsletterText')->name('newsletter.text');

	Route::get('/media/newsletter/html/{newsletter_id}', 'MediaController@newsletterHtml')->name('newsletter.html');






	Route::get('/media/directory/index', 'MediaController@directoryIndex')->name('directory.index');

	
	Route::get('/media/directory/create', 'MediaController@directoryCreate')->name('directory.create');
	Route::post('/media/directory/create', 'MediaController@directoryStore')->name('directory.store');

	Route::get('/media/directory/edit/{directory_id}', 'MediaController@directoryEdit')->name('directory.edit');
	Route::post('/media/directory/edit/{directory_id}', 'MediaController@directoryUpdate')->name('directory.update');

	Route::post('/media/directory/delete/{directory_id}', 'MediaController@directoryDelete')->name('directory.delete');


});





Route::get('/show', 'MediaController@show')->name('show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
