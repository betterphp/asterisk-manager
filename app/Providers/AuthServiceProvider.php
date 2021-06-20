<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        $this->app["auth"]->viaRequest("api", function ($request) {
            $token = $request->bearerToken() ?? null;

            return (\is_string($token))
                ? User::where("api_key", $token)->first()
                : null;
        });
    }
}
