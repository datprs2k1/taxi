<?php

use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\User\ContactController;
use App\Http\Controllers\Api\User\OrderController;
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

Route::group(['controller' => AuthController::class], function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});


Route::post('price', [OrderController::class, 'price']);

Route::post('order', [OrderController::class, 'order']);

Route::post('contact', [ContactController::class, 'submit']);
