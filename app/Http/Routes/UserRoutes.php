<?php

declare(strict_types=1);

namespace App\Http\Routes;

use App\Http\Controllers\UserController;

final class UserRoutes extends Routes
{
    public function register(): void
    {
        $this->router->get("/user", UserController::class);
    }
}
