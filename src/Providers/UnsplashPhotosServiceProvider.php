<?php

namespace Cosnavel\LaravelUnsplash\Providers;

use Illuminate\Support\ServiceProvider;

class UnsplashPhotosServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('UnsplashPhotos', function () {
            return new \Cosnavel\LaravelUnsplash\UnsplashPhotos();
        });
    }
}
