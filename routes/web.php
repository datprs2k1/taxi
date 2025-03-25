<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ConfigController as AdminConfigController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index']);
});

Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AdminHomeController::class, 'login'])->name('login');
    Route::post('/login', [AdminHomeController::class, 'processLogin'])->name('processLogin');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('home.index');
        Route::group(['prefix' => 'config', 'as' => 'config.'], function () {
            Route::get('', [AdminConfigController::class, 'index'])->name('index');
            Route::post('update', [AdminConfigController::class, 'update'])->name('update');
        });
        Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
            Route::get('', [AdminOrderController::class, 'index'])->name('index');
            Route::post('/{id}/accept', [AdminOrderController::class, 'accept'])->name('accept');
            Route::post('/{id}/reject', [AdminOrderController::class, 'reject'])->name('reject');
            Route::post('/{id}/complete', [AdminOrderController::class, 'complete'])->name('complete');
        });
    });
});
