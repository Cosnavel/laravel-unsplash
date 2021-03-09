<?php

namespace Cosnavel\LaravelUnsplash\Facades;

use Illuminate\Support\Facades\Facade;

class UnsplashSearch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'UnsplashSearch';
    }
}
