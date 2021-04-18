<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Jahuty\Client;

class JahutyProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            return new Client(config('jahuty.api_key'));
        });
    }

    public function boot()
    {
        View::share('jahuty', $this->app->make(Client::class));
    }
}
