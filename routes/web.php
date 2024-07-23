<?php

use App\Http\Controllers\HomeController;
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


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/products', 'products')->name('products');
    Route::get('/products/{id}', 'productOne')->name('product-one');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/all-collection', 'allCollection')->name('all-collection');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/collection-one', 'collectionOne')->name('collection-one');
    Route::get('/transaction-one', 'transactionOne')->name('transaction-one');
    Route::get('/transaction-two', 'transactionTwo')->name('transaction-two');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/forgot-password', 'forgotPassword')->name('forgotPassword');
    Route::post('/search-product', 'searchProduct')->name('search-product');
});