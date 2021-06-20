<?php

declare(strict_types=1);

namespace App\Http\Routes;

use Laravel\Lumen\Routing\Router;

final class RouteRegistrar
{
    private static array $routes = [
        HealthCheckRoutes::class,
    ];

    public static function registerAll(Router $router): void
    {
        foreach (static::$routes as $route_class) {
            $routes = new $route_class($router);
            $routes->register();
        }
    }
}
