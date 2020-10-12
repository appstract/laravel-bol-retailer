<?php

namespace Appstract\BolRetailer;

use Illuminate\Support\ServiceProvider;
use Picqer\BolRetailer\Client;

class BolRetailerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/bol-retailer.php' => config_path('bol-retailer.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/bol-retailer.php', 'bol-retailer');

        $this->app->bind('bol.retailer', function ($app) {
            Client::setDemoMode(config('bol-retailer.use_demo_mode'));

            Client::setCredentials(
                config('bol-retailer.client_id'),
                config('bol-retailer.client_secret')
            );

            return new BolRetailer();
        });
    }

    /**
     * [provides description].
     * @return [type] [description]
     */
    public function provides()
    {
        return ['bol.retailer'];
    }
}
