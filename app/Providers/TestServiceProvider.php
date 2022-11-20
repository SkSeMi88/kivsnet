<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use App\Test\Test;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('test', function(){
            return new Test(config("app"));

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
