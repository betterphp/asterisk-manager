<?php

declare(strict_types=1);

namespace App\Http\Routes;

use App\Http\Controllers\CallsController;

final class CallsRoutes extends Routes
{
    /**
     * Registers the call routes
     *
     * @return void
     */
    public function register(): void
    {
        $this->router->get("/calls", CallsController::class);
    }
}
