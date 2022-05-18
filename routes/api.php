<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UktController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\MidtransController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::apiResource('midtrans',MidtransController::class);
Route::prefix('payment')->group(function () {
    Route::get('gopay',[PaymentController::class,'gopay']);
});

Route::resource('ukt',UktController::class);
// Route::group(['middleware' => 'auth:api'], function(){
//     Route::apiResource('midtrans',MidtransController::class);
//     Route::apiResource('payment',PaymentController::class);
//     Route::apiResource('ukt',UktController::class);
// });
