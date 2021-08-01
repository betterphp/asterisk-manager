<?php

declare(strict_types=1);

namespace App\Http\Routes;

use App\Http\Controllers\UpstreamProvidersController;

final class UpstreamProviderRoutes extends Routes
{
    /**
     * Registers any upstream provider routes
     *
     * @return void
     */
    public function register(): void
    {
        $this->router->get("/upstream_providers", UpstreamProvidersController::class);
    }
}
