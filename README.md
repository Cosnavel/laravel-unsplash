
**A Laravel wrapper for Unsplash.**

## Install

Via Composer

``` bash
$ composer require cosnavel/laravel-unsplash
```

Add your UNSPLASH_ACCESS_KEY to .env

## Usage
See documention for params and others at [unsplash docs](https://unsplash.com/documentation)

List of methods:

### Photos

``` php

$photos        = UnsplashPhotos::photos([]);          // list of all photos
$photo         = UnsplashPhotos::single($id, $params);     // single photo
$statistic     = UnsplashPhotos::statistic($id, $params);  // single photo statistics
$downloadUrl   = UnsplashPhotos::download($id, $params);   // single photo download link
$curatedPhotos = UnsplashPhotos::curated($params);         // list of curated photos
$randomPhoto   = UnsplashPhotos::random($params);          // random photo
```

### Users

``` php
use UnsplashUsers;

$user         = UnsplashUsers::profile($username, $params);      // single user
$portfolio    = UnsplashUsers::portfolio($username);             // single user's portfolio
$photos       = UnsplashUsers::photos($username, $params);       // single user's photos
$photos       = UnsplashUsers::likes($username, $params);        // single user's likes
$collections  = UnsplashUsers::collections($username, $params);  // single user's collections
$statistics   = UnsplashUsers::statistics($username, $params);   // single user's statistics
```

### Collections

``` php
use UnsplashCollections;

$collection  = UnsplashCollections::collections($params);    // list of all collections
$collection  = UnsplashCollections::single($id, $params);    // single collections
$photos      = UnsplashCollections::photos($id, $params);    // collection photos
$statistic   = UnsplashCollections::statistic($id, $params); // single collections statistics
$collection  = UnsplashCollections::curated($params);        // list of curated collections
$collection  = UnsplashCollections::related($id, $params);   // list of related collections
$collection  = UnsplashCollections::featured($params);       // list of featured collections
```

### Search

``` php
use UnsplashSearch;

$photos     = UnsplashSearch::photo($query, $params);
$collection = UnsplashSearch::collection($query, $params);
$user       = UnsplashSearch::user($query, $params);
```
