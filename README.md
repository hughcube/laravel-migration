<h1 align="center">Laravel Migration Extension</h1>


<p>
    <a href="https://github.com/hughcube/laravel-migration/actions?query=workflow%3ATest">
        <img src="https://github.com/hughcube/laravel-migration/workflows/Test/badge.svg" alt="Test Actions status">
    </a>
    <a href="https://github.com/hughcube/laravel-migration/actions?query=workflow%3ALint">
        <img src="https://github.com/hughcube/laravel-migration/workflows/Lint/badge.svg" alt="Lint Actions status">
    </a>
    <a href="https://styleci.io/repos/249034690">
        <img src="https://github.styleci.io/repos/249034690/shield?branch=master" alt="StyleCI">
    </a>
    <a href="https://scrutinizer-ci.com/g/hughcube/laravel-migration/?branch=master">
        <img src="https://scrutinizer-ci.com/g/hughcube/laravel-migration/badges/coverage.png?b=master" alt="Code Coverage">
    </a>
    <a href="https://scrutinizer-ci.com/g/hughcube/laravel-migration/?branch=master">
        <img src="https://scrutinizer-ci.com/g/hughcube/laravel-migration/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality">
    </a> 
    <a href="https://scrutinizer-ci.com/g/hughcube/laravel-migration/?branch=master">
        <img src="https://scrutinizer-ci.com/g/hughcube/laravel-migration/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status">
    </a>        
    <a href="https://github.com/hughcube/laravel-migration">
        <img src="https://img.shields.io/badge/php-%3E%3D%207.0-8892BF.svg" alt="PHP Versions Supported">
    </a>
    <a href="https://packagist.org/packages/hughcube/laravel-migration">
        <img src="https://poser.pugx.org/hughcube/laravel-migration/version" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/hughcube/laravel-migration">
        <img src="https://poser.pugx.org/hughcube/laravel-migration/downloads" alt="Total Downloads">
    </a>
    <a href="https://github.com/hughcube/laravel-migration/blob/master/LICENSE">
        <img src="https://img.shields.io/badge/license-MIT-428f7e.svg" alt="License">
    </a>
    <a href="https://packagist.org/packages/hughcube/laravel-migration">
        <img src="https://poser.pugx.org/hughcube/laravel-migration/v/unstable" alt="Latest Unstable Version">
    </a>
    <a href="https://packagist.org/packages/hughcube/laravel-migration">
        <img src="https://poser.pugx.org/hughcube/laravel-migration/composerlock" alt="composer.lock available">
    </a>
</p>

## Installing

```shell
$ composer require hughcube/laravel-migration -vvv
```

## Basic Usage (In artisan file)

```php
#!/usr/bin/env php
<?php

use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\ConsoleOutput;

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/
$app = require __DIR__ . '/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Artisan Application
|--------------------------------------------------------------------------
|
| When we run the console application, the current CLI command will be
| executed in this console and the response sent back to a terminal
| or another output device for the developers. Here goes nothing!
|
*/
$kernel = $app->make(
    'Illuminate\Contracts\Console\Kernel'
);

/** !!! Register after kernel is created  */
$app->register(\HughCube\Laravel\Migrations\ServiceProvider::class);

exit($kernel->handle(new ArgvInput, new ConsoleOutput));

```
