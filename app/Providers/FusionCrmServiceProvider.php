<?php

namespace App\Providers;

use App\Services\FusionCrmService;
use Illuminate\Support\ServiceProvider;

class FusionCrmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(FusionCrmService::class, function ($app) {
            return new FusionCrmService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
