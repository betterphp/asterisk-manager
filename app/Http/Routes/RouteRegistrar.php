<?php

declare(strict_types=1);

namespace App\Http\Routes;

use Laravel\Lumen\Routing\Router;

final class RouteRegistrar
{
    /**
     * List of route classes to register
     *
     * @var string[]
     * @phan-var list<class-string<Routes>>
     */
    private static array $routes = [
        HealthCheckRoutes::class,
        UserRoutes::class,
        CallsRoutes::class,
        EndpointRoutes::class,
    ];

    /**
     * Register all of the API routes with the framework
     *
     * @param Router $router The router instance
     *
     * @return void
     */
    public static function registerAll(Router $router): void
    {
        foreach (static::$routes as $routes_class) {
            $middleware = ($routes_class::$authenticated)
                ? ["auth"]
                : [];

            $router->group(
                ["middleware" => $middleware],
                function (Router $router) use ($routes_class): void {
                    $routes = new $routes_class($router);
                    $routes->register();
                },
            );
        }
    }
}
