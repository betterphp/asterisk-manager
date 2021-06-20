<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Call;

class CallsController extends Controller
{
    /**
     * GET /calls
     *
     * Gets details of calls made
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        $calls = Call::paginate(50);

        return \response()->json($calls);
    }
}
