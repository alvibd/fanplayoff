<?php

namespace App\Providers;

use App\Sportradar\NationalFootballLeague;
use Illuminate\Support\Facades\App;
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
        //
        App::singleton(NationalFootballLeague::class, function (){
           return new NationalFootballLeague(\GuzzleHttp\Client::class, config('services.sportradar.api_key'), config('services.sportradar.access_level'), config('services.sportradar.api_version'));
        });
//        App::resolve('NationalFootBallLeague');
    }
}
