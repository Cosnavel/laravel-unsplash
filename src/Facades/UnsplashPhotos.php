<?php

namespace Cosnavel\LaravelUnsplash\Facades;

use Illuminate\Support\Facades\Facade;

class UnsplashPhotos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'UnsplashPhotos';
    }
}
