<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\ProductController;
use App\Http\Controllers\APIDistrictController;

use App\Http\Controllers\APIWardsController;
use App\Http\Controllers\ProvinceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Allproducts',[ProductController::class,'index']);
Route::get('/chartProductsAPI',[ProductController::class,'chartProductsControllers']);
Route::get('/chartProductsByOrderAPI',[ProductController::class,'chartProductsByOrder']);
// products by sub category
Route::get('/productSubCate/{id}',[ProductController::class,'getProductsBySubCategory']);
// products disscount
Route::get('/productDisscount',[ProductController::class,'getProductsDisscount']);
// product new
Route::get('/productNew',[ProductController::class,'getProductsNew']);
// Products details
Route::get('/productDetails/{id}',[ProductController::class,'getProductDetails']);

Route::get('/productsBysubDetails/{id}',[ProductController::class,'getProductsBySubDetailAPI']);

Route::get('/productsBySubCateogry/{id}',[ProductController::class,'getProductsBySubCategory']);

Route::get('/category/{id}',[ProductController::class,'getProductsBySubDetailAPI']);

Route::get('/productBySubdetails/{id}',[ProductController::class,'getProductsBySubDetail']);

// categories
Route::get('/categoryAPI',[CategoryAPIController::class,'getAPICetegoryController']);
// subcategories
Route::get('subCategoryAPI',[SubCategoryAPIController::class,'getAPISubCetegoryController']);
// subCategoryDetails
Route::get('SubCategoryDetailsAPIController',[SubCategoryDetailsAPIController::class,'getAPISubCetegoryDetailsController']);

Route::get('/cartAPI',[ProductController::class,"getCartTempAPI"])->name('getCartTemp');

Route::get('cartUpdateAPI',[ProductController::class,"updateValueNumberCart"]);
Route::get('cartDeleteAPI',[ProductController::class,"deleteCartTemp"]);

// District

Route::get('/districtAPI', [APIDistrictController::class,'getDistrictAPI'])->name('districtAPI');

// wardsAPI
Route::get('/wardsAPI', [APIWardsController::class,'getWardsAPI'])->name('getWardsAPI');
// provinceAPI
Route::get('/provinceAPI', [ProvinceController::class,'getprovince'])->name('provinceAPI');
