<?php

namespace App\Providers;

use App\Services\ArrayMenuService;
use App\Services\MenuServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(MenuServiceInterface::class, fn() => new ArrayMenuService());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
