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

//front page
//home

Route::get('sub', 'user\SubscribeController@index')->name('subscribe');
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
//tailors
Route::get('/tailors', 'TailorController@index')->name('tailors');
Route::get('/tailors/{id}', 'TailorController@show')->name('tailor.show');
//user dashborad 
// Route::get('/dashboard', 'ProfileController@index')->name('dashboard');
//editing profile 

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update');
Auth::routes();


//firebase testing 
Route::view('customers', 'customers');
//Admin Section 

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () 
{
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    //admin clothes section 
    Route::post('cloth/add', 'ClothController@store')->name('cloth.add');
    Route::get('cloth/edit/{id}', 'ClothController@edit')->name('cloth.edit');
    Route::post('cloth/post/{id}', 'ClothController@update')->name('cloth.update');
    Route::get('cloth/delete/{id}', 'ClothController@destroy')->name('cloth.delete');
    //admin tailor section
    Route::get('tailor/{id}', 'TailorController@show')->name('tailor.show');
    Route::get('tailor/edit/{id}', 'TailorController@edit')->name('tailor.edit');
    Route::post('tailor/post/{id}', 'TailorController@update')->name('tailor.update');
    Route::get('tailor/delete/{id}', 'TailorController@destroy')->name('tailor.delete');
    //Enabling Trending 
    Route::get('/cloth/trend_enable/{id}', 'ClothController@enable_trending')->name('enable.trending');
    //disable Trending
    Route::get('/cloth/trend_disable/{id}', 'ClothController@disable_trending')->name('disable.trending');
    //comments  
    Route::get('comment/unapprove/{id}', 'ClothController@unapprove_comment')->name('unapprove.comment');
    Route::get('comment/approve/{id}', 'ClothController@approve_comment')->name('approve.comment');
    Route::get('comment/delete/{id}', 'ClothController@destroy_comment')->name('comment.delete');
    //profile section
    Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update');
    //categories 
    Route::post('categories/add', 'CategoryController@store')->name('category.add');
     Route::get('category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
});

//Tailor section 

Route::group(['as' => 'tailor.', 'prefix' => 'tailor', 'namespace' => 'Tailor', 'middleware' => ['auth', 'tailor']], function () 
{
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    //profile 
    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update');
    // tailor clothes section
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

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    //wishlist 
    Route::get('wishlist', 'WishlistController@index')->name('wishlist.index');
    Route::post('add_wishlist', 'WishlistController@store')->name('add.wishlist');
    Route::get('remove_wishlist/{id}', 'WishlistController@destroy')->name('delete.wishlist');

    //my clothes 
    Route::get('my_clothes', 'DashboardController@my_clothes')->name('my_clothes');

    // comments
    Route::post('comments/', 'DashboardController@storecomment')->name('store.comment');

    //profile  
    Route::get('/profile/', 'ProfileController@index')->name('profile');
    Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update');
    
    //subscribe 
    Route::get('subscribed', 'DashboardController@subscribed')->name('subscribed');
    Route::post('subscribe', 'SubscribeController@store')->name('add.subscribe');
    Route::post('/subscribe/{id}', 'ProfileController@user_tailor')->name('user.tailor');
    Route::get('remove_subscription/{id}', 'SubscribeController@destroy')->name('delete.subscribe');
    // become a Tailor
    Route::get('/become_tailor', 'DashboardController@become_tailor')->name('become_tailor');
    //messaging
    Route::get('messaging', 'DashboardController@messaging')->name('messaging');
});