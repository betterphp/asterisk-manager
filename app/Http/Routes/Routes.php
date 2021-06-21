<?php

declare(strict_types=1);

namespace App\Http\Routes;

use Laravel\Lumen\Routing\Router;

abstract class Routes
{
    /**
     * Defines if the routes require authentication
     *
     * @var bool
     */
    public static bool $authenticated = true;

    /**
     * Creates an instance of the routes handler
     *
     * @param Router $router The router instance
     */
    final public function __construct(protected Router $router)
    {
        //
    }

    /**
     * Register the routes with the framework
     *
     * @return void
     */
    abstract public function register(): void;
}
