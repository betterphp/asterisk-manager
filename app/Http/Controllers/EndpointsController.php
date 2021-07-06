<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Endpoint;

class EndpointsController extends Controller
{
    /**
     * GET /endpoints
     *
     * Gets details of all internal endpoints
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        $endpoints = Endpoint::paginate(50);

        return \response()->json($endpoints);
    }
}
