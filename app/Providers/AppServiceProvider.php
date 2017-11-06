<?php

namespace App\Providers;

use App\Sportradar\NationalFootballLeague;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->call([$this, 'registerService']);
    }

    public function registerService()
    {
        $this->app->singleton(NationalFootballLeague::class, function ($app){
            return new NationalFootballLeague($app->make('\GuzzleHttp\Client'), config('services.sportradar.api_key'), config('services.sportradar.access_level'), config('services.sportradar.api_version'));
        });
    }

    public function provides()
    {
        return [NationalFootballLeague::class];
    }
}
