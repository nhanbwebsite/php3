<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProvinceController;

use App\Http\Controllers\APIDistrictController;

use App\Http\Controllers\APIWardsController;

use App\Http\Controllers\admin\CategoryController;

use App\Http\Controllers\clients\ProductController;
// Post controller
use  App\Http\Controllers\admin\PostController;
// order
use App\Http\Controllers\admin\OrderController;

// user controller
use App\Http\Controllers\admin\UserController;
// comment controller
use App\Http\Controllers\admin\CommentController;

// ProductsController ADMIN
use App\Http\Controllers\admin\ProductController as ProductControllerAmin;
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
        Route::get('/',[CategoryController::class,'listCategories'])->name('amin.category.list');
        Route::get('/add',[CategoryController::class,'index'])->name('amin.category.addGet');
        Route::post('/add',[CategoryController::class,'addPost']);
        Route::get('/edit/{id}',[CategoryController::class,'edit']);
        Route::prefix('sub_categories')->group(function (){
            // Thêm mới danh mục
            Route::get('/add',[CategoryController::class,'index']);
            Route::post('/add',[CategoryController::class,'index']);
        });
   });

    Route::prefix('products')->group(function (){
        // Thêm mới danh mục
        Route::get('/',[ProductControllerAmin::class,'index'])->name('amin.products.list');
        Route::get('/add',[ProductControllerAmin::class,'addGet'])->name('amin.products.addGet');
        Route::post('/add',[ProductControllerAmin::class,'index']);

    });
    Route::prefix('post')->group(function (){
        // Bài viết
        Route::get('/',[PostController::class,'index'])->name('amin.post.list');
        Route::get('/add',[PostController::class,'addGet'])->name('amin.post.addGet');

    });
    Route::prefix('user')->group(function (){
        // Bài viết
        Route::get('/',[UserController::class,'index'])->name('amin.user.list');
        Route::get('/add',[UserController::class,'addGet'])->name('amin.user.addGet');
        Route::post('/add',[UserController::class,'addGet'])->name('amin.user.addGet');

    });
    Route::prefix('order')->group(function (){
        // Bài viết
        Route::get('/',[OrderController::class,'index'])->name('admin.order.list');
    });
    Route::prefix('comments')->group(function (){
        // Bài viết
        Route::get('/',[CommentController::class,'listComment'])->name('admin.comment.list');
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

