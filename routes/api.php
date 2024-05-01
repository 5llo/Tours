<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthCustomerController;
use App\Http\Controllers\Api\AuthDesignerController;
use App\Http\Controllers\Api\AuthOfferController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Route::middleware('auth:sanctum')->post('/customer/logout', [AuthCustomerController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/customer/login',[AuthCustomerController::class,'login']);
Route::post('/customer/register',[AuthCustomerController::class,'register']);

Route::post('/designer/login',[AuthDesignerController::class,'login']);
Route::post('/offer/login',[AuthOfferController::class,'login']);


Route::middleware(['auth:sanctum'])->group(function () {
    // Routes that require Sanctum authentication
    Route::post('/customer/logout', [AuthCustomerController::class, 'logout']);
    Route::post('/designer/logout', [AuthDesignerController::class, 'logout']);
    Route::post('/offer/logout', [AuthOfferController::class, 'logout']);

});
