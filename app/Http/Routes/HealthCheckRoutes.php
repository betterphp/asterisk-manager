<?php

declare(strict_types=1);

namespace App\Http\Routes;

use App\Http\Controllers\HealthCheckController;

final class HealthCheckRoutes extends Routes
{
    /**
     * Specify that the health check endpoints don't need authentication
     *
     * @var bool
     */
    public static bool $authenticated = false;

    /**
     * Register the health check routes
     *
     * @retuen void
     */
    public function register(): void
    {
        $this->router->get("/__health", HealthCheckController::class);
    }
}
