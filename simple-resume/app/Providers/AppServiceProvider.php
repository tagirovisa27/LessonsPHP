<?php

namespace App\Providers;

use App\Services\AdminAuthManagerInterface;
use App\Services\ArrayMenuService;
use App\Services\CookieAdminAuthManager;
use App\Services\MenuServiceInterface;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(MenuServiceInterface::class, fn() => new ArrayMenuService());
        
        $this->app->bind(AdminAuthManagerInterface::class, CookieAdminAuthManager::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
