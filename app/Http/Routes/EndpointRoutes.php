<?php

declare(strict_types=1);

namespace App\Http\Routes;

use App\Http\Controllers\EndpointsController;

final class EndpointRoutes extends Routes
{
    /**
     * Registers the endpoint routes
     *
     * @retuen void
     */
    public function register(): void
    {
        $this->router->get("/endpoints", EndpointsController::class);
    }
}
