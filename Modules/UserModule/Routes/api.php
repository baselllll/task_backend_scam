<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Modules\UserModule\Http\Controllers\ProductController;

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


Route::prefix('products')->group(function () {
    Route::get('get-all-products/{type}',[ProductController::class,'GetAllProduct']);
    Route::post('add-product',[ProductController::class,'AddProduct']);
    Route::post('delete-selected-product',[ProductController::class,'DeleteProducts']);
});
