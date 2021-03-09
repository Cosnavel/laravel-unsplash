<?php

namespace Cosnavel\LaravelUnsplash\Providers;

use Illuminate\Support\ServiceProvider;

class UnsplashCollectionsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('UnsplashCollections', function () {
            return new \Cosnavel\LaravelUnsplash\UnsplashCollections();
        });
    }
}
