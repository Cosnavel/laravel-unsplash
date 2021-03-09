<?php

namespace Cosnavel\LaravelUnsplash\Providers;

use Illuminate\Support\ServiceProvider;

class UnsplashServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/unsplash.php' => config_path('unsplash.php'),
        ], 'unsplash-config');
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/unsplash.php', 'unsplash');
    }
}
