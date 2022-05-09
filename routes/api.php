<?php

use App\Http\Controllers\MidtransController;
use App\Http\Controllers\PaymentHistoryController;
use App\Http\Controllers\UktController;
use Illuminate\Http\Request;
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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::group(['middleware' => 'auth:api'], function(){
    Route::apiResource('midtrans',MidtransController::class);
    Route::apiResource('payment',PaymentHistoryController::class);
    Route::apiResource('ukt',UktController::class);
});
