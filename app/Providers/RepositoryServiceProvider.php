<?php

namespace App\Providers;

use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Config\IConfigRepository;
use App\Repositories\Config\ConfigRepository;
use App\Repositories\Order\IOrderRepository;
use App\Repositories\Order\OrderRepository;

class RepositoryServiceProvider extends ServiceProvider
{


    public function register()
    {
        $this->app->singleton(IUserRepository::class, UserRepository::class);
        $this->app->singleton(IConfigRepository::class, ConfigRepository::class);
        $this->app->singleton(IOrderRepository::class, OrderRepository::class);
    }
}
