<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * GET /user
     *
     * Gets details of the currently authenticated user
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return \response()->json($this->request->user());
    }
}
