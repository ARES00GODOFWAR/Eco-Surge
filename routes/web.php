<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/Shipping', function () {
//     return view('shipping');
// })->name('shipping');


Route::resource('shipping', 'ShippingController');

Route::get('/delivery', 'DeliveryController@index')->name('delivery');

Route::get('/shipping', 'ShippingController@index')->name('shipping');

Route::get('/payment', 'PaymentController@index')->name('payment');

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



