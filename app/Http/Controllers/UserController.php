<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return \response()->json($this->request->user());
    }
}
