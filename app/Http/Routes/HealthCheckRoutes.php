<?php

declare(strict_types=1);

namespace App\Http\Routes;

use Illuminate\Http\JsonResponse;

final class HealthCheckRoutes extends Routes
{
    public static bool $authenticated = false;

    public function register(): void
    {
        $this->router->get("/__health", fn (): JsonResponse => \response()->json([]));
    }
}
