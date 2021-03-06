<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ConfigParameters\ParametersList;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $parameters = new ParametersList;
        \Config::set('github.connections.main.token', $parameters->gittoken);
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
