<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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
Route::post('/try', 'HomeController@try')->name('try');

// Route::get('sub', 'user\SubscribeController@index')->name('subscribe');
Route::get('/', 'HomeController@index')->name('home');
//about
Route::get('/about', 'HomeController@about')->name('about');
//contact 
Route::get('/contact', 'HomeController@contact')->name('contact');
//clothes
Route::get('/clothes', 'ClothController@index')->name('clothes');
Route::get('/clothes/{slug}', 'ClothController@show')->name('cloth.show');
//single cloth section
Route::view('/single-cloth', 'front.clothes.single-cloth');
//cart section
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/add_quantity/{rowID}', 'CartController@update_plus')->name('cart.add_quantity');
Route::get('/cart/sub_quantity/{rowID}', 'CartController@update_minus')->name('cart.sub_quanity');
Route::get('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
Route::get('/empty_cart', 'CartController@empty_cart')->name('empty_cart');

// Route::get('/empty', function() {
//     Cart::destroy();
//     return back()->with('success', 'Cart Emptied!');
// })->name('empty');

//search 
Route::get('search', 'HomeController@search')->name('search');

//Checkout section
Route::view('/checkout', 'front.search_results');
//Designers
Route::get('/designers', 'TailorController@index')->name('tailors');
Route::get('/designers/{id}', 'TailorController@show')->name('tailor.show');
//user dashborad 
// Route::get('/dashboard', 'ProfileController@index')->name('dashboard');
//editing profile 

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update');
Auth::routes();

//firebase testing 
Route::view('customers', 'customers');


//**Admin Section 

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () 
{
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    //admin clothes section 
    Route::get('clothes', 'ClothController@index')->name('clothes');
    Route::get('add_cloth', 'ClothController@create')->name('add_cloth');
    Route::post('cloth/add', 'ClothController@store')->name('cloth.add');
    Route::get('cloth/edit/{id}', 'ClothController@edit')->name('cloth.edit');
    Route::post('cloth/post/{id}', 'ClothController@update')->name('cloth.update');
    Route::get('cloth/delete/{id}', 'ClothController@destroy')->name('cloth.delete');
    //admin designer section
    Route::get('designer', 'TailorController@index')->name('tailor');
    Route::get('designer/{id}', 'TailorController@show')->name('tailor.show');
    Route::get('designer/edit/{id}', 'TailorController@edit')->name('tailor.edit');
    Route::post('designer/post/{id}', 'TailorController@update')->name('tailor.update');
    Route::get('designer/delete/{id}', 'TailorController@destroy')->name('tailor.delete');
    //Users section 
    Route::get('users', 'DashboardController@users')->name('users');
    Route::get('user/delete/{id}', 'DashboardController@destroy_user')->name('user.delete');
    //Enabling Trending 
    Route::get('/cloth/trend_enable/{id}', 'ClothController@enable_trending')->name('enable.trending');
    //disable Trending
    Route::get('/cloth/trend_disable/{id}', 'ClothController@disable_trending')->name('disable.trending');
    //comments 
    Route::get('approved_comments', 'ClothController@approved_comments')->name('approved_comments'); 
    Route::get('unapproved_comments', 'ClothController@unapproved_comments')->name('unapproved_comments'); 
    Route::get('comment/unapprove/{id}', 'ClothController@unapprove_comment')->name('unapprove.comment');
    Route::get('comment/approve/{id}', 'ClothController@approve_comment')->name('approve.comment');
    Route::get('comment/delete/{id}', 'ClothController@destroy_comment')->name('comment.delete');
    //profile section
    Route::get('profile', 'ProfileController@index')->name('profile'); 
    Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update');
    //categories 
    Route::get('category', 'CategoryController@index')->name('category');
    Route::get('add_category', 'CategoryController@create')->name('add_category');
    Route::post('categories/add', 'CategoryController@store')->name('category.add');
     Route::get('category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
     //payment 
     Route::get('payments', 'DashboardController@payments')->name('payments');

});

//Designers section 

Route::group(['as' => 'designer.', 'prefix' => 'designer', 'namespace' => 'Tailor', 'middleware' => ['auth', 'tailor']], function () 
{
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    //profile 
    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update');
    // designer clothes section
    Route::get('clothes', 'ClothController@index')->name('clothes');
    Route::get('add_clothes', 'ClothController@create')->name('clothes.create');
    Route::post('cloth/add', 'ClothController@store')->name('cloth.add');
    Route::get('cloth/edit/{id}', 'ClothController@edit')->name('cloth.edit');
    Route::post('cloth/post/{id}', 'ClothController@update')->name('cloth.update');
    Route::get('cloth/delete/{id}', 'ClothController@destroy')->name('cloth.delete');
    //messaging 
    Route::get('messaging', 'DashboardController@messaging')->name('messaging');
    
});

//User section 

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () 
{

    Route::post('send_measurement/male', 'DashboardController@sendMaleMeasure')->name('sendMaleMeasure');
    Route::post('send_measurement/female', 'DashboardController@sendFemaleMeasure')->name('sendFemaleMeasure');

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    //wishlist 
    Route::get('wishlist', 'WishlistController@index')->name('wishlist.index');
    Route::post('add_wishlist', 'WishlistController@store')->name('add.wishlist');
    Route::get('remove_wishlist/{id}', 'WishlistController@destroy')->name('delete.wishlist');
    //my clothes 
    Route::get('my_designes', 'DashboardController@my_clothes')->name('my_clothes');
    // comments
    Route::post('comments/', 'DashboardController@storecomment')->name('store.comment');
    //profile  
    Route::get('profile/', 'ProfileController@index')->name('profile');
    Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update'); 
    //subscribe 
    Route::get('subscribed', 'DashboardController@subscribed')->name('subscribed');
    Route::post('subscribe', 'SubscribeController@store')->name('add.subscribe');
    Route::get('remove_subscription/{id}', 'SubscribeController@destroy')->name('delete.subscribe');
    // become a designer
    Route::get('/become_designer/{id}', 'ProfileController@become_tailor')->name('become_tailor');
    Route::post('/become_designer/{id}', 'ProfileController@user_tailor')->name('user_tailor');
    //messaging
    Route::get('messaging', 'DashboardController@messaging')->name('messaging');
    //checkout
    Route::get('/message_tailor/{tailor_id}', 'DashboardController@message_tailor_cloth')->name('message.tailor');
    //Paystack section 
    Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
    //payment History
    Route::get('payment_history', 'DashboardController@payment_history')->name('payment_history');
    
    
    // Wallet routes
    Route::get('wallet', 'WalletController@wallet')->name('wallet');
    Route::get('get-balance', 'WalletController@getBalance')->name('get.balance');
    Route::post('fund-wallet', 'WalletController@createOrder')->name('create.order');

    Route::post('/pay', 'WalletController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'WalletController@handleGatewayCallback')->name('payment');

    });