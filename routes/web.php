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




Route::get('/shops/list/index', 'ShopController@shopIndex')->name('shops.index');

Route::get('/shops/list/show/{shop_id}', 'ShopController@shopShow')->name('shops.show');

Route::get('/shops/list/create', 'ShopController@shopCreate')->name('shops.create');
Route::post('/shops/list/create', 'ShopController@shopStore')->name('shops.store');

Route::get('/shops/list/{shop_id}/edit', 'ShopController@shopEdit')->name('shops.edit');
Route::post('/shops/list/{shop_id}/edit', 'ShopController@shopUpdate')->name('shops.update');

Route::post('/shops/list/{shop_id}/delete', 'ShopController@shopDelete')->name('shops.delete'); 




Route::get('/shops/budgets/index', 'ShopController@budgetsIndex')->name('shop_budgets.index');

Route::get('/shops/budgets/show/{budget_id}', 'ShopController@budgetsShow')->name('shop_budgets.show');

Route::get('/shops/budgets/create', 'ShopController@budgetsCreate')->name('shop_budgets.create');
Route::post('/shops/budgets/create', 'ShopController@budgetsStore')->name('shop_budgets.store');

Route::get('/shops/budgets/{budget_id}/edit', 'ShopController@budgetsEdit')->name('shop_budgets.edit');
Route::post('/shops/budgets/{budgets_id}/edit', 'ShopController@budgetsUpdate')->name('shop_budgets.update');

Route::post('/shops/budgets/{budget_id}/delete', 'ShopController@budgetsDelete')->name('shop_budgets.delete'); 



// Route::get('/shop_stock/index', 'ShopController@stockIndex')->name('shop_stock.index');

// Route::get('/shop_stock/show/{shop_id}', 'ShopController@stockShow')->name('shop_stock.show');

// Route::get('/shop_stock/create', 'ShopController@stockCreate')->name('shop_stock.create');
// Route::post('/shop_stock/create', 'ShopController@stockStore')->name('shop_stock.store');

// Route::get('/shop_stock/{shop_id}/edit', 'ShopController@stockEdit')->name('shop_stock.edit');
// Route::post('/shop_stock/{shop_id}/edit', 'ShopController@stockUpdate')->name('shop_stock.update');

// Route::post('/shop_stock/{shop_id}/', 'ShopController@stockDelete')->name('shop_stock.delete'); 



Route::get('/shops/orders/index', 'ShopController@ordersIndex')->name('shop_orders.index');

Route::get('/shops/orders/show/{shop_id}', 'ShopController@ordersShow')->name('shop_orders.show');

Route::get('/shops/orders/create', 'ShopController@ordersCreate')->name('shop_orders.create');
Route::post('/shops/orders/create', 'ShopController@ordersStore')->name('shop_orders.store');

Route::get('/shops/orders/{shop_id}/edit/{shop_order_id}', 'ShopController@ordersEdit')->name('shop_orders.edit');
Route::post('/shops/orders/{shop_id}/edit/{shop_order_id}', 'ShopController@ordersUpdate')->name('shop_orders.update');

Route::post('/shops/orders/{shop_id}/delete/{shop_order_id}', 'ShopController@ordersDelete')->name('shop_orders.delete'); 








Route::get('/corporations/clients/index', 'CorporationController@clientsIndex')->name('corporation_clients.index');

Route::get('/corporations/clients/show/{corporation_id}', 'CorporationController@clientsShow')->name('corporation_clients.show');

Route::get('/corporations/clients/create', 'CorporationController@clientsCreate')->name('corporation_clients.create');
Route::post('/corporations/clients/create', 'CorporationController@clientsStore')->name('corporation_client.store');

Route::get('/corporations/clients/{corporation_id}/edit', 'CorporationController@clientsEdit')->name('corporation_clients.edit');
Route::post('/corporations/clients/{corporation_id}/edit', 'CorporationController@clientsUpdate')->name('corporation_clients.update');

Route::post('/corporations/clients/{corporation_id}/delete', 'CorporationController@clientsDelete')->name('corporation_clients.delete'); 


Route::get('/corporations/budgets/index', 'CorporationController@budgetsIndex')->name('corporation_budgets.index');

Route::get('/corporations/budgets/show/{corporation_id}', 'CorporationController@budgetsShow')->name('corporation_budgets.show');

Route::get('/corporations/budgets/create', 'CorporationController@budgetsCreate')->name('corporation_budgets.create');
Route::post('/corporations/budgets/create', 'CorporationController@budgetsStore')->name('corporation_budget.store');

Route::get('/corporations/budgets/{corporation_id}/edit', 'CorporationController@budgetsEdit')->name('corporation_budgets.edit');
Route::post('/corporations/budgets/{corporation_id}/edit', 'CorporationController@budgetsUpdate')->name('corporation_budgets.update');

Route::post('/corporations/budgets/{corporation_id}/delete', 'CorporationController@budgetsDelete')->name('corporation_budgets.delete'); 



Route::get('/corporations/orders/index', 'CorporationController@ordersIndex')->name('corporation_orders.index');

Route::get('/corporations/orders/show/{corporation_id}', 'CorporationController@ordersShow')->name('corporation_orders.show');

Route::get('/corporations/orders/create', 'CorporationController@ordersCreate')->name('corporation_orders.create');
Route::post('/corporations/orders/create', 'CorporationController@ordersStore')->name('corporation_orders.store');

Route::get('/corporations/orders/{corporation_id}/edit', 'CorporationController@ordersEdit')->name('corporation_orders.edit');
Route::post('/corporations/orders/{corporation_id}/edit', 'CorporationController@ordersUpdate')->name('corporation_orders.update');

Route::post('/corporations/orders/{corporation_id}/delete', 'CorporationController@ordersDelete')->name('corporation_orders.delete'); 


Route::get('/corporations/invoices/index', 'CorporationController@invoicesIndex')->name('corporation_invoices.index');

Route::get('/corporations/invoices/show/{corporation_id}', 'CorporationController@invoicesShow')->name('corporation_invoices.show');

Route::get('/corporations/invoices/create', 'CorporationController@invoicesCreate')->name('corporation_invoices.create');
Route::post('/corporations/invoices/create', 'CorporationController@invoicesStore')->name('corporation_invoices.store');

Route::get('/corporations/invoices/{corporation_id}/edit', 'CorporationController@invoicesEdit')->name('corporation_invoices.edit');
Route::post('/corporations/invoices/{corporation_id}/edit', 'CorporationController@invoicesUpdate')->name('corporation_invoices.update');

Route::post('/corporations/invoices/{corporation_id}/delete', 'CorporationController@invoicesDelete')->name('corporation_invoices.delete'); 









Route::get('/products/list/index', 'ProductController@productsIndex')->name('products.index');

Route::get('/products/list/show/{product_id}', 'ProductController@productsShow')->name('products.show');

Route::get('/products/list/create', 'ProductController@productsCreate')->name('products.create');
Route::post('/products/list/create', 'ProductController@productsStore')->name('product.store');

Route::get('/products/list/{product_id}/edit', 'ProductController@productsEdit')->name('pruducts.edit');
Route::post('/products/list/{product_id}/edit', 'ProductController@productsUpdate')->name('products.update');

Route::post('/products/list/{product_id}/delete', 'ProductController@productsDelete')->name('product.delete'); 



Route::get('/products/process/index', 'ProductController@processIndex')->name('process.index');

Route::get('/products/process/show/{process_id}', 'ProductController@processShow')->name('process.show');

Route::get('/products/process/create', 'ProductController@processCreate')->name('process.create');
Route::post('/products/process/create', 'ProductController@processStore')->name('process.store');

Route::get('/products/process/{process_id}/edit', 'ProductController@processEdit')->name('process.edit');
Route::post('/products/process/{process_id}/edit', 'ProductController@processUpdate')->name('process.update');

Route::post('/products/process/{process_id}/delete', 'ProductController@productsDelete')->name('process.delete'); 


Route::get('/products/delivery/index', 'ProductController@deliveryIndex')->name('delivery.index');

Route::get('/products/delivery/show/{delivery_id}', 'ProductController@deliveryShow')->name('delivery.show');

Route::get('/products/delivery/create', 'ProductController@deliveryCreate')->name('delivery.create');
Route::post('/products/delivery/create', 'ProductController@deliveryStore')->name('delivery.store');

Route::get('/products/delivery/{delivery_id}/edit', 'ProductController@deliveryEdit')->name('delivery.edit');
Route::post('/shops/delivery/{delivery_id}/edit', 'ProductController@deliveryUpdate')->name('delivery.update');

Route::post('/products/delivery/{delivery_id}/delete', 'ProductController@deliveryDelete')->name('delivery.delete'); 





Route::get('/earnings/shops/index', 'EarningsController@shopsIndex')->name('shopearnings.index');

Route::get('/earnings/shops/show/{shop_id}', 'EarningsController@shopsShow')->name('shopearnings.show');

Route::get('/earnings/shops/create', 'EarningsController@shopsCreate')->name('shopearnings.create');
Route::post('/earnings/shops/create', 'EarningsController@shopsStore')->name('shopearnings.store');

Route::get('/earnings/shops/{shopearnings_id}/edit', 'EarningsController@shopsEdit')->name('shopearnings.edit');
Route::post('/earnings/shops/{shopearnings_id}/edit', 'EarningsController@shopsUpdate')->name('shopearnings.update');

Route::post('/earnings/shops/{shopearnings_id}/delete', 'EarningsController@shopsDelete')->name('shopearnings.delete'); 


Route::get('/earnings/corporations/index', 'EarningsController@corporationsIndex')->name('corporationearnings.index');

Route::get('/earnings/corporations/show/{shop_id}', 'EarningsController@corporationsShow')->name('corporationearnings.show');

Route::get('/earnings/corporations/create', 'EarningsController@corporationsCreate')->name('corporationearnings.create');
Route::post('/earnings/corporations/create', 'EarningsController@corporationsStore')->name('corporationearnings.store');

Route::get('/earnings/corporations/{corporationearnings_id}/edit', 'EarningsController@corporationsEdit')->name('corporationearnings.edit');
Route::post('/earnings/corporations/{corporationearnings_id}/edit', 'EarningsController@corporationsUpdate')->name('corporationearnings.update');

Route::post('/earnings/corporations/{corporationearnings_id}/delete', 'EarningsController@corporationsDelete')->name('corporationearnings.delete'); 


Route::get('/earnings/ec/index', 'EarningsController@ecIndex')->name('ecearnings.index');

Route::get('/earnings/ec/show/{shop_id}', 'EarningsController@ecShow')->name('ecearnings.show');

Route::get('/earnings/ec/create', 'EarningsController@ecCreate')->name('ecearnings.create');
Route::post('/earnings/ec/create', 'EarningsController@ecStore')->name('ecearnings.store');

Route::get('/earnings/ec/{ecearnings_id}/edit', 'EarningsController@ecEdit')->name('ecearnings.edit');
Route::post('/earnings/ec/{ecales_id}/edit', 'EarningsController@ecUpdate')->name('ecearnings.update');

Route::post('/earnings/ec/{ecearnings_id}/delete', 'EarningsController@ecDelete')->name('ecearnings.delete'); 


Route::get('/earnings/promotions/index', 'EarningsController@promotionsIndex')->name('promotionearnings.index');

Route::get('/earnings/promotions/show/{shop_id}', 'EarningsController@promotionsShow')->name('promotionearnings.show');

Route::get('/earnings/promotions/create', 'EarningsController@promotionsCreate')->name('promotionearnings.create');
Route::post('/earnings/promotions/create', 'EarningsController@promotionsStore')->name('promotionearnings.store');

Route::get('/earnings/promotions/{promotionearnings_id}/edit', 'EarningsController@promotionsEdit')->name('promotionearnings.edit');
Route::post('/earnings/promotions/{promotionearnings_id}/edit', 'EarningsController@promotionsUpdate')->name('promotionearnings.update');

Route::post('/earnings/promotions/{promotionearnings_id}/delete', 'EarningsController@promotionsDelete')->name('promotionearnings.delete'); 


Route::get('/earnings/categories/index', 'EarningsController@categoriesIndex')->name('categoriesearnings.index');

Route::get('/earnings/categories/show/{shop_id}', 'EarningsController@categoriesShow')->name('categoriesearnings.show');

Route::get('/earnings/categories/create', 'EarningsController@categoriesCreate')->name('categoriesearnings.create');
Route::post('/earnings/categories/create', 'EarningsController@categoriesStore')->name('categoriesearnings.store');

Route::get('/earnings/categories/{categoriesearnings_id}/edit', 'EarningsController@categoriesEdit')->name('categoriesearnings.edit');
Route::post('/earnings/categories/{categoriesearnings_id}/edit', 'EarningsController@categoriesUpdate')->name('categoriesearnings.update');

Route::post('/earnings/categories/{categoriesearnings_id}/delete', 'EarningsController@categoriesDelete')->name('categoriesearnings.delete'); 


Route::get('/earnings/brands/index', 'EarningsController@brandsIndex')->name('brandearnings.index');

Route::get('/earnings/brands/show/{shop_id}', 'EarningsController@brandsShow')->name('brandearnings.show');

Route::get('/earnings/brands/create', 'EarningsController@brandsCreate')->name('brandearnings.create');
Route::post('/earnings/brands/create', 'EarningsController@brandsStore')->name('brandearnings.store');

Route::get('/earnings/brands/{brandearnings_id}/edit', 'EarningsController@brandsEdit')->name('brandearnings.edit');
Route::post('/earnings/brands/{brandearnings_id}/edit', 'EarningsController@brandsUpdate')->name('brandearnings.update');

Route::post('/earnings/brands/{brandearnings_id}/delete', 'EarningsController@brandsDelete')->name('brandearnings.delete'); 


Route::get('/earnings/sizes/index', 'EarningsController@sizesIndex')->name('sizeearnings.index');

Route::get('/earnings/sizes/show/{shop_id}', 'EarningsController@sizesShow')->name('sizeearnings.show');

Route::get('/earnings/sizes/create', 'EarningsController@sizesCreate')->name('sizeearnings.create');
Route::post('/earnings/sizes/create', 'EarningsController@sizesStore')->name('sizeearnings.store');

Route::get('/earnings/sizes/{sizeearnings_id}/edit', 'EarningsController@sizesEdit')->name('sizeearnings.edit');
Route::post('/earnings/sizes/{sizeearnings_id}/edit', 'EarningsController@sizesUpdate')->name('sizeearnings.update');

Route::post('/earnings/sizes/{sizeearnings_id}/delete', 'EarningsController@sizesDelete')->name('sizeearnings.delete'); 


Route::get('/earnings/ages/index', 'EarningsController@agesIndex')->name('ageearnings.index');

Route::get('/earnings/ages/show/{shop_id}', 'EarningsController@agesShow')->name('ageearnings.show');

Route::get('/earnings/ages/create', 'EarningsController@agesCreate')->name('ageearnings.create');
Route::post('/earnings/ages/create', 'EarningsController@agesStore')->name('ageearnings.store');

Route::get('/earnings/ages/{ageearnings_id}/edit', 'EarningsController@agesEdit')->name('ageearnings.edit');
Route::post('/earnings/ages/{ageearnings_id}/edit', 'EarningsController@agesUpdate')->name('ageearnings.update');

Route::post('/earnings/ages/{ageearnings_id}/delete', 'EarningsController@agesDelete')->name('ageearnings.delete'); 


Route::get('/earnings/areas/index', 'EarningsController@areasIndex')->name('areaearnings.index');

Route::get('/earnings/areas/show/{shop_id}', 'EarningsController@areasShow')->name('areaearnings.show');

Route::get('/earnings/areas/create', 'EarningsController@areasCreate')->name('areaearnings.create');
Route::post('/earnings/areas/create', 'EarningsController@areasStore')->name('areaearnings.store');

Route::get('/earnings/areas/{areaearnings_id}/edit', 'EarningsController@areasEdit')->name('areaearnings.edit');
Route::post('/earnings/areas/{areaearnings_id}/edit', 'EarningsController@areasUpdate')->name('areaearnings.update');

Route::post('/earnings/areas/{areaearnings_id}/delete', 'EarningsController@areasDelete')->name('areaearnings.delete'); 










Route::get('/promotion/list/index', 'PromotionController@promotionIndex')->name('promotion.index');

Route::get('/promotion/list/show/{promotion_id}', 'PromotionController@promotionShow')->name('promotion.show');

Route::get('/promotion/list/create', 'PromotionController@promotionCreate')->name('promotion.create');
Route::post('/promotion/list/create', 'PromotionController@promotionStore')->name('promotion.store');

Route::get('/promotion/list/{promotion_id}/edit', 'PromotionController@promotionEdit')->name('promotion.edit');
Route::post('/promotion/list/{promotion_id}/edit', 'PromotionController@promotionUpdate')->name('promotion.update');

Route::post('/promotion/list/{promotion_id}/delete', 'PromotionController@promotionDelete')->name('promotion.delete'); 



Route::get('/promotion/log/index', 'PromotionController@logIndex')->name('log.index');

Route::get('/promotion/log/show/{log_id}', 'PromotionController@logShow')->name('log.show');

Route::get('/promotion/log/create', 'PromotionController@logCreate')->name('log.create');
Route::post('/promotion/log/create', 'PromotionController@logStore')->name('log.store');

Route::get('/promotion/log/{log_id}/edit', 'PromotionController@logEdit')->name('log.edit');
Route::post('/promotion/log/{log_id}/edit', 'PromotionController@logUpdate')->name('log.update');

Route::post('/promotion/log/{log_id}/delete', 'PromotionController@logDelete')->name('log.delete'); 



Route::get('/promotion/homepage/index', 'PromotionController@homepageIndex')->name('homepage.index');

Route::get('/promotion/homepage/show/{page_id}', 'PromotionController@homepageShow')->name('homepage.show');

Route::get('/promotion/homepage/create', 'PromotionController@homepageCreate')->name('homepage.create');
Route::post('/promotion/homepage/create', 'PromotionController@homepageStore')->name('homepage.store');

Route::get('/promotion/homepage/{pege_id}/edit', 'PromotionController@homepageEdit')->name('homepage.edit');
Route::post('/promotion/homepage/{page_id}/edit', 'PromotionController@homepageUpdate')->name('homepage.update');

Route::post('/promotion/homepage/{page_id}/delete', 'PromotionController@homepageDelete')->name('homepage.delete');



Route::get('/promotion/newsletter/index', 'PromotionController@newsletterIndex')->name('newsletter.index');

Route::get('/promotion/newsletter/show/{newsletter_id}', 'PromotionController@newsletterShow')->name('newsletter.show');

Route::get('/promotion/newsletter/create', 'PromotionController@newsletterCreate')->name('newsletter.create');
Route::post('/promotion/newsletter/create', 'PromotionController@newsletterStore')->name('newsletter.store');

Route::get('/promotion/newsletter/{newsletter_id}/edit', 'PromotionController@newsletterEdit')->name('newsletter.edit');
Route::post('/promotion/newsletter/{newsletter_id}/edit', 'PromotionController@newsletterUpdate')->name('newsletter.update');

Route::post('/promotion/newsletter/{newsletter_id}/delete', 'PromotionController@newsletterDelete')->name('newsletter.delete');



Route::get('/promotion/sns/index', 'PromotionController@snsIndex')->name('sns.index');

Route::get('/promotion/sns/show/{sns_id}', 'PromotionController@snsShow')->name('sns.show');

Route::get('/promotion/sns/create', 'PromotionController@snsCreate')->name('sns.create');
Route::post('/promotion/sns/create', 'PromotionController@snsStore')->name('sns.store');

Route::get('/promotion/sns/{sns_id}/edit', 'PromotionController@snsEdit')->name('sns.edit');
Route::post('/promotion/sns/{sns_id}/edit', 'PromotionController@snsUpdate')->name('sns.update');

Route::post('/promotion/sns/{sns_id}/delete', 'PromotionController@snsDelete')->name('sns.delete');



Route::get('/promotion/blog/index', 'PromotionController@blogIndex')->name('blog.index');

Route::get('/promotion/blog/show/{blog_id}', 'PromotionController@blogShow')->name('blog.show');

Route::get('/promotion/blog/create', 'PromotionController@blogCreate')->name('blog.create');
Route::post('/promotion/blog/create', 'PromotionController@blogStore')->name('blog.store');

Route::get('/promotion/blog/{blog_id}/edit', 'PromotionController@blogEdit')->name('blog.edit');
Route::post('/promotion/blog/{blog_id}/edit', 'PromotionController@blogUpdate')->name('blog.update');

Route::post('/promotion/blog/{blog_id}/delete', 'PromotionController@blogDelete')->name('blog.delete');



Route::get('/promotion/othermedia/index', 'PromotionController@othermediaIndex')->name('othermedia.index');

Route::get('/promotion/othermedia/show/{othermedia_id}', 'PromotionController@othermediaShow')->name('othermedia.show');

Route::get('/promotion/othermedia/create', 'PromotionController@othermediaCreate')->name('othermedia.create');
Route::post('/promotion/othermedia/create', 'PromotionController@othermediaStore')->name('othermedia.store');

Route::get('/promotion/othermedia/{othermedia_id}/edit', 'PromotionController@othermediaEdit')->name('othermedia.edit');
Route::post('/promotion/othermedia/{othermedia_id}/edit', 'PromotionController@othermediaUpdate')->name('othermedia.update');

Route::post('/promotion/othermedia/{othermedia_id}/delete', 'PromotionController@othermediaDelete')->name('othermedia.delete');

