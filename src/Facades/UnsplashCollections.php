<?php

namespace Cosnavel\LaravelUnsplash\Facades;

use Illuminate\Support\Facades\Facade;

class UnsplashCollections extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'UnsplashCollections';
    }
}
