<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Contracts\Dashboard\DashboardInterface::class, \App\Repositories\Dashboard\DashboardRepository::class);
        $this->app->bind(\App\Contracts\Officer\OfficerInterface::class, \App\Repositories\Officer\OfficerRepository::class);
        $this->app->bind(\App\Contracts\Vehicle\VehicleInterface::class, \App\Repositories\Vehicle\VehicleRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
