<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Eusebiu\JavaScript\Facades\ScriptVariables;
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
        ScriptVariables::add(function () {
            return [
                'baseUrl' => url('/'),
                'data' => auth()->user(),
            ];
        });
        
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
    }
}
