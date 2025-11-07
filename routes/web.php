<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ConfigController as AdminConfigController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UploadController as AdminUploadController;
use App\Http\Controllers\User\MapController;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/bai-viet', [PostController::class, 'index'])->name('posts.index');
    Route::get('/bai-viet/{slug}', [PostController::class, 'show'])->name('posts.show');
    // Static/simple pages
    Route::view('/ve-chung-toi', 'pages.user.about')->name('about');
    Route::view('/lien-he', 'pages.user.contact')->name('contact');
    // Policies
    Route::view('/chinh-sach/van-chuyen-hanh-khach', 'pages.user.policies.transport')->name('policy.transport');
    Route::view('/chinh-sach/bao-ve-quyen-rieng-tu', 'pages.user.policies.privacy')->name('policy.privacy');
    Route::view('/chinh-sach/su-dung-dich-vu', 'pages.user.policies.terms')->name('policy.terms');
    // Promotions and news listings (simple views)
    Route::get('/khuyen-mai', function () {
        $promotionPosts = \App\Models\Post::where('type', 'promotion')->orderByDesc('published_date')->get();
        return view('pages.user.promotions', compact('promotionPosts'));
    })->name('promotions.index');
    Route::get('/tin-tuc', function () {
        $newsPosts = \App\Models\Post::where('type', 'post')->orderByDesc('published_date')->get();
        return view('pages.user.news', compact('newsPosts'));
    })->name('news.index');
    
    // Map.php handler for booking form (legacy support)
    Route::post('/map.php', [MapController::class, 'handle']);
});

Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AdminHomeController::class, 'login'])->name('login');
    Route::post('/login', [AdminHomeController::class, 'processLogin'])->name('processLogin');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('home.index');
        Route::post('/logout', [AdminHomeController::class, 'logout'])->name('logout');
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
        Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
            Route::get('', [AdminPostController::class, 'index'])->name('index');
            Route::get('/create', [AdminPostController::class, 'create'])->name('create');
            Route::post('', [AdminPostController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [AdminPostController::class, 'edit'])->name('edit');
            Route::put('/{id}', [AdminPostController::class, 'update'])->name('update');
            Route::delete('/{id}', [AdminPostController::class, 'destroy'])->name('destroy');
        });

        // Uploads
        Route::post('/upload/image', [AdminUploadController::class, 'image'])->name('upload.image');
    });
});

Route::get('/order/{id}', [AdminOrderController::class, 'detail'])->name('order.detail');

// Sitemap
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');
