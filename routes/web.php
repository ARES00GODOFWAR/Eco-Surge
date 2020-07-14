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



Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::get('/home', 'HomeController@index');

// Route::get('/portfolio', function () {
//     return view('portfolio');
// })->name('portfolio');


//checkout 
Route::get('/checkout', 'CheckoutController@index')->name('checkout.checkout');


Route::group(['middleware' => ['auth']], function() {
Route::get('/settings', 'Settings@settings');
Route::post('/','Settings@changePassword')->name('changePassword');
});


Route::get('/productShow', function () {
    return view('productShow');
})->name('productShow');
//Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Products
Route::get('/create', 'ProductController@create')->name('create');
//Category
// Route::resource('category','CategoriesController');

Route::post('/products', 'ProductController@store');
Route::get('/products', 'ProductController@index')->name('productShow');


