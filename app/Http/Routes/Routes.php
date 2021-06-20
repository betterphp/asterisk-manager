<?php

declare(strict_types=1);

namespace App\Http\Routes;

use Laravel\Lumen\Routing\Router;

abstract class Routes
{
    public static bool $authenticated = true;

    final public function __construct(protected Router $router)
    {
        //
    }

    abstract public function register(): void;
}
