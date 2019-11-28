<?php

namespace App\Providers;

use App\Repository\Eloquent\PhoneRepository;
use App\Repository\PhoneRepositoryInterface;
use App\Service\Implement\PhoneService;
use App\Service\PhoneServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PhoneServiceInterface::class, PhoneService::class);
        $this->app->singleton(PhoneRepositoryInterface::class, PhoneRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
