<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Http\Request;

class Authenticate
{
    /**
     * Create a new middleware instance.
     *
     * @param \Illuminate\Contracts\Auth\Factory $auth
     */
    public function __construct(protected Auth $auth)
    {
        //
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request The request to handle
     * @param \Closure $next the next handler in the chain
     * @param string|null $guard Name of the auth guard in use
     *
     * @return mixed
     */
    public function handle(Request $request, \Closure $next, ?string $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            return \response("Unauthorized.", 401);
        }

        return $next($request);
    }
}
