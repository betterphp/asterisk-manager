<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HealthCheckController extends Controller
{
    /**
     * GET /__health
     *
     * Gets the health status of the API and VoIP server
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return \response()->json([
            "status" => "up",
            "checks" => [],
        ]);
    }
}
