<?php

namespace App\Providers;

use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::pushMiddlewareToGroup('web', TestMiddleware::class);
    }
}
