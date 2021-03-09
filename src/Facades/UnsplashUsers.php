<?php

namespace Cosnavel\LaravelUnsplash\Facades;

use Illuminate\Support\Facades\Facade;

class UnsplashUsers extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'UnsplashUsers';
    }
}
