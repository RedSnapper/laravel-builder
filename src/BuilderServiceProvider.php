<?php

namespace RS\Builder;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BuilderServiceProvider extends ServiceProvider
{
    public function register()
    {

        // Add the cms views
        if(config('builder.path')){
            View::addLocation(config('builder.path'));
        }

        //Register the routes file
        if(config('builder.registers_routes')){
            Route::group(['middleware'=>['web']], function () {
                $this->loadRoutesFrom(config('builder.route'));
            });
        }

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
          Console\InstallCommand::class,
        ]);
    }
}