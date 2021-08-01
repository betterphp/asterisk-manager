<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\UpstreamProvider;

class UpstreamProvidersController extends Controller
{
    /**
     * GET /upstream_providers
     *
     * Gets detaisl of all upstream call providers
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        $providers = UpstreamProvider::paginate(50);

        return \response()->json($providers);
    }
}
