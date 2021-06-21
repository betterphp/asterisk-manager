<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot(): void
    {
        Auth::viaRequest("api", fn (Request $request): ?User => (
            $this->getUserFromRequest($request)
        ));
    }

    /**
     * Gets the current user from the request headers
     *
     * @param Request $request The request
     *
     * @return User|null
     */
    private function getUserFromRequest(Request $request): ?User
    {
        $token = $request->bearerToken() ?? null;

        return (\is_string($token))
            ? User::query()->where("api_key", $token)->first()
            : null;
    }
}
