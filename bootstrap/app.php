<?php

declare(strict_types=1);

use Laravel\Lumen\Application;
use Laravel\Lumen\Bootstrap\LoadEnvironmentVariables;

/**
 * Create an instance of the application
 *
 * @return Application
 */
function createApp(): Application
{
    (new LoadEnvironmentVariables(\dirname(__DIR__)))->bootstrap();

    \date_default_timezone_set(env("APP_TIMEZONE", "UTC"));

    $app = new Application(\dirname(__DIR__));

    $app->withFacades();
    $app->withEloquent();

    $app->singleton(
        Illuminate\Contracts\Debug\ExceptionHandler::class,
        App\Exceptions\Handler::class
    );

    $app->singleton(
        Illuminate\Contracts\Console\Kernel::class,
        App\Console\Kernel::class
    );

    $app->configure("app");

    $app->routeMiddleware([
        "auth" => App\Http\Middleware\Authenticate::class,
    ]);

    $app->register(App\Providers\AppServiceProvider::class);
    $app->register(App\Providers\AuthServiceProvider::class);

    App\Http\Routes\RouteRegistrar::registerAll($app->router);

    return $app;
}
