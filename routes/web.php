<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProvinceController;

use App\Http\Controllers\APIDistrictController;

use App\Http\Controllers\APIWardsController;

use App\Http\Controllers\admin\CategoryController;

use App\Http\Controllers\clients\ProductController;
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
// API
Route::get('/productBySubdetails/{id}',[ProductController::class,'getProductsBySubDetail']);

// End API
// clients
Route::get('/', function () {
    return view('clients.home');
}) -> name('client.home');


Route::get('/product_details/{id}',[ProductController::class,'productDetails'])->name('proDetail');
Route::get('productsByCategoryDetails/{id}',[ProductController::class,'getProductsBySubDetailClients'])->name('subDetails');

Route::get('/cartEmpty', function () {
    return view('clients.cartEmpty');
});

Route::get('/cart', function () {
    return view('clients.cart');
}) -> name('client.cart') ;


Route::get('/productsByCategory', function () {
    return view('clients.productsByCategory');
}) -> name('client.products') ;


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
// end clients
// Route admin
Route::prefix('admin')->group(function () {
            // Danh mục sản phẩm
    Route::prefix('categories')->group(function (){
        // Thêm mới danh mục
        Route::get('/add',[CategoryController::class,'index']);
        Route::post('/add',[CategoryController::class,'index']);
   });

});




//  route lab




// end route lab





// test

Route::get('/provinceAPI', [ProvinceController::class,'getprovince'])->name('provinceAPI');
Route::get('/province',function(){
    return view('clients.test');
});

// District

Route::get('/districtAPI', [APIDistrictController::class,'getDistrictAPI'])->name('districtAPI');
Route::get('/wardsAPI', [APIWardsController::class,'getWardsAPI'])->name('getWardsAPI');

// test products




// end test

