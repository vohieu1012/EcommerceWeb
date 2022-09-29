<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductUserController;
use App\Http\Controllers\Api\ShowProduct;
use App\Http\Controllers\Api\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


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

// Route::group([
//     'namespace'=>'App\Http\Controllers',
//     'middleware' => 'api',
// ], function ($router) {

//     Route::post('delete/{id}', 'PersonalDetailsAdmin@delete');
// }
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [RegisterController::class, 'register']);
// api register
// Route::post('test', [TestController::class, 'index']);
Route::get('getUser', [RegisterController::class, 'getUser']);

// login create token
Route::post('login', [LoginController::class, 'create']);
Route::get('userInf', [LoginController::class, 'userInfo'])->middleware('auth:api');
// Logout
Route::get('logout', [LogoutController::class, 'logoutApi'])->middleware('auth:api');
// Product
// Route::post('selectImage', [UploadImage::class, 'selectImage']);
// Refresh Token
Route::get('refreshToken', [LoginController::class, 'refreshToken']);
// ShowProduct 
Route::get('allProduct', [ProductUserController::class, 'allProduct'])->middleware('auth:api');
Route::post('addProduct', [ProductUserController::class, 'addProduct'])->middleware('auth:api');
Route::post('deleteProduct/{id}',[ProductUserController::class,'deleteProduct']);
Route::post('editProduct',[ProductUserController::class,'editProduct']);
Route::get('searchProduct/{name}',[ProductUserController::class,'searchProduct']);



