<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\ProductController;
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

Route::get('/productSubCate/{id}',[ProductController::class,'getProductsBySubCate']);

Route::get('/productDetails/{id}',[ProductController::class,'getProductDetails']);

Route::get('/productsBysubDetails/{id}',[ProductController::class,'getProductsBySubDetailAPI']);

Route::get('/category/{id}',[ProductController::class,'getProductsBySubDetailAPI']);

Route::get('/productBySubdetails/{id}',[ProductController::class,'getProductsBySubDetail']);

// categories
Route::get('/categoryAPI',[CategoryAPIController::class,'getAPICetegoryController']);
// subcategories
Route::get('subCategoryAPI',[SubCategoryAPIController::class,'getAPISubCetegoryController']);
// subCategoryDetails
Route::get('SubCategoryDetailsAPIController',[SubCategoryDetailsAPIController::class,'getAPISubCetegoryDetailsController']);
