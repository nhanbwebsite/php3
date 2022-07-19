<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProvinceController;

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
    return view('clients.home');
}) -> name('client.home');

Route::get('/products_details', function () {
    return view('clients.product_details');
});

Route::get('/cartEmpty', function () {
    return view('clients.cartEmpty');
});

Route::get('/cart', function () {
    return view('clients.cart');
}) -> name('client.cart') ;

Route::get('/checkoutInfomation', function () {
    return view('clients.checkoutInfomation');
});

Route::get('/login', function () {
    return view('clients.login');
}) -> name('client.login');

Route::get('/register', function () {
    return view('clients.register');
}) -> name('client.register');

Route::get('/news', function () {
    return view('clients.news');
}) -> name('client.news');



Route::get('/allProducts', function () {
    return view('clients.products');
}) -> name('client.products');




//  route lab



// end route lab



// test

Route::get('/province', [ProvinceController::class,'getprovince']);

// end test
