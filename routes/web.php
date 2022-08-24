<?php

use Illuminate\Support\Facades\Route;

// home
use App\Http\Controllers\clients\HomeController;

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
// login
use App\Http\Controllers\admin\LoginController;
// forgot
use App\Http\Controllers\clients\ForgotPass as ForgotPassController;
// /order - checkout controller
use App\Http\Controllers\Order_table_Controller;
// ProductsController ADMIN
use App\Http\Controllers\admin\ProductController as ProductControllerAmin;
 use App\Http\Controllers\admin\CategoryAPIController;
 use  App\Http\Controllers\admin\SubCategoryAPIController;
use App\Http\Controllers\admin\SubCategoryDetailsAPIController;
// register
use App\Http\Controllers\admin\RegisterController;
// size admin
use App\Http\Controllers\admin\SizeController;
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


// End API
// clients
Route::get('/', [HomeController::class,'index']) -> name('client.home');


Route::get('/product_details/{id}',[ProductController::class,'productDetails'])->name('proDetail');
Route::post('product_details/{id}',[ProductController::class,'addCart']);
Route::get('productsByCategoryDetails/{id}',[ProductController::class,'getProductsBySubDetailClients'])->name('clients.productsByCategoryDetails');
Route::get('/allProducts',[ProductController::class,'getAllproducts'])->name('clients.allProducts');
Route::get('/search',[ProductController::class,'getProductsForSearch'])->name('clients.search');

Route::get('/cartEmpty', function () {
    return view('clients.cartEmpty');
});

Route::get('/cart', function () {
    return view('clients.cart');
}) -> name('client.cart') ;

Route::get('/productsByCategory/{id}',[ProductController::class,"getProductsBySubCate"]) -> name('client.productsByCategory');

Route::get('/checkoutInfomation',[Order_table_Controller::class,"index"]);
Route::post('/checkoutInfomation',[Order_table_Controller::class,"postCheckout"]);

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/login',[LoginController::class,'loginGet']) -> name('client.login');
Route::post('/login',[LoginController::class,'loginPost']) -> name('client.loginPost');
Route::get('/forgotpass',[ForgotPassController::class,'index']) -> name('client.forgot');
Route::post('/forgotpass',[ForgotPassController::class,'handleForgot']) -> name('client.forgot');
Route::get('/resetPass',[ForgotPassController::class,'reset']) -> name('client.resetPass');
Route::post('/resetPass',[ForgotPassController::class,'resetPost']) -> name('client.resetPassPost');
Route::get('/confirmResetPass',[ForgotPassController::class,'resetPass']) -> name('clients.confirmResetPass');
Route::get('/a',function(){
    return view('clients.sendEmailByOrder');
});

Route::get('/register',[RegisterController::class,'registerGet']) -> name('client.register');
Route::post('/register',[RegisterController::class,'registerPost']) -> name('client.register');

Route::get('/accountClient',[Order_table_Controller::class,'getOrderDetailsByUser'])->middleware('checkSessionUser') -> name('clients.customer_account_management');
Route::post('/accountClient',[Order_table_Controller::class,'handleUpdateAccountClient'])->middleware('checkSessionUser') -> name('clients.handleUpdateAccountClient');

Route::get('/news', function () {
    return view('clients.news');
}) -> name('client.news');
Route::get('/newsDetails', function () {
    return view('clients.newsDetails');
}) -> name('client.newsDetails');

// end clients
// Route admin
Route::prefix('admin')->middleware('admin.checkLoginAdmin')->group(function () {
            // Danh mục sản phẩm
    Route::prefix('categories')->group(function (){
        // Thêm mới danh mục
        Route::get('/',[CategoryController::class,'listCategories'])->name('amin.category.list');
        Route::get('/add',[CategoryController::class,'index'])->name('amin.category.addGet');
        Route::post('/add',[CategoryController::class,'addPost']);
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('admin.getEditCategory');
        Route::post('/edit/{id}',[CategoryController::class,'handleEdit'])->name('editPostCategory');
        Route::get('detele/{id}',[CategoryController::class,'handleDeleteCategory'])->name('admin.deleteCategory');
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
        Route::post('/add',[ProductControllerAmin::class,'addPost']);
        Route::get('/update/{id}',[ProductControllerAmin::class,'update'])->name('amin.products.update');
        Route::post('/update/{id}',[ProductControllerAmin::class,'updatehandle'])->name('amin.products.update');
        Route::get('/delete/{id}',[ProductControllerAmin::class,'handleDelete'])->name('amin.products.delete');

    });
    // Size

    Route::prefix('size')->group(function (){
        // Thêm mới danh mục
        Route::get('/',[SizeController::class,'getAll'])->name('admin.size.list');
        Route::get('/addGet',[SizeController::class,'addGet'])->name('amin.size.addGet');
        Route::post('/addGet',[SizeController::class,'addPost']);
        Route::get('/getUpdatesize/{id}',[SizeController::class,'getUpdatesize'])->name('amin.size.updateGet');
        Route::post('/getUpdatesize/{id}',[SizeController::class,'handleUpdate'])->name('amin.size.updatePost');
        Route::get('/delete/{id}',[SizeController::class,'handleDelete'])->name('admin.size.delete');

    });

    // end size

    Route::prefix('post')->group(function (){
        // Bài viết
        Route::get('/',[PostController::class,'index'])->name('amin.post.list');
        Route::get('/add',[PostController::class,'addGet'])->name('amin.post.addGet');
    });
    Route::prefix('user')->group(function (){
        // Bài viết
        Route::get('/',[UserController::class,'index'])->name('amin.user.list');
        Route::get('/add',[UserController::class,'addGet'])->name('amin.user.addGet');
        Route::post('/add',[UserController::class,'addPost'])->name('amin.user.addPost');
        Route::get('/update/{id}',[UserController::class,'updateUser'])->name('amin.user.updateGet');
        Route::post('/update/{id}',[UserController::class,'handelUpdate'])->name('amin.user.updatePost');
        Route::get('/delete/{id}',[UserController::class,'deleteUser'])->name('amin.user.delete');
    });
    Route::prefix('order')->group(function (){
        // Bài viết
        Route::get('/',[OrderController::class,'index'])->name('admin.order.list');
        Route::get('/orderDetailsByIdorder/{id}',[OrderController::class,'getOrderDetailsByIdOrder'])->name('admin.order.orderDetailsByIdorder');
    });
    Route::prefix('comments')->group(function (){
        // Bài viết
        Route::get('/',[CommentController::class,'listComment'])->name('admin.comment.list');
    });
    Route::prefix('chart')->group(function (){
        // Bài viết
        Route::get('/',[ProductController::class,'chartProductsControllersGetView'])->name('admin.chart.productsByCategory');
        Route::get('/chartProductsByOrder',[ProductController::class,'chartProductsByOrderControllersGetView'])->name('admin.chart.productsByOrder');
    });
});

// end test

