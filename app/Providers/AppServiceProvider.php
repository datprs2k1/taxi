<?php

namespace App\Providers;

use App\Models\Config as SiteConfig;
use App\Services\_Abstract\TransactionService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton("app.transactions", function () {
            return new TransactionService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        // Share site configuration with all views (used by header/footer/navbar components)
        try {
            $config = SiteConfig::all();
            View::share('config', $config);
        } catch (\Throwable $e) {
            // In case of migrations not run yet, avoid breaking boot
        }
    }
}
