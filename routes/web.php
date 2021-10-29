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

//front page
//home


Route::get('/', 'HomeController@index')->name('home');
//about
Route::get('/about', 'HomeController@about')->name('about');
//contact 
Route::get('/contact', 'HomeController@contact')->name('contact');
//clothes
Route::get('/clothes', 'ClothController@men_cloth')->name('men_cloth');
Route::get('/clothesz/{id}', 'ClothController@show')->name('cloth.show');
//single cloth section
Route::view('/single-cloth', 'front.clothes.single-cloth');
//cart section
Route::view('/cart', 'front.clothes.cart');
//Checkout section
Route::view('/checkout', 'front.clothes.checkout');
//tailors
Route::get('/tailors', 'TailorController@index')->name('tailors');
Route::get('tailors/{id}', 'TailorController@show')->name('show.tailor');
//user dashborad 
Route::get('/dashboard', 'ProfileController@index')->name('dashboard');
//editing profile 

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/update-profile/{id}', 'ProfileController@update')->name('profile.update');
Auth::routes();


//firebase testing 
Route::view('customers', 'customers');
//Admin Section 

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () 
{
    Route::get('dashboard', 'ProfileController@index')->name('dashboard');
});

//Tailor section 

Route::group(['as' => 'tailor.', 'prefix' => 'tailor', 'namespace' => 'Tailor', 'middleware' => ['auth', 'tailor']], function () 
{
    Route::get('dashboard', 'ProfileController@index')->name('dashboard');
});

//User section 

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () 
{
    Route::get('dashboard', 'ProfileController@index')->name('dashboard');
});