<?php

declare(strict_types=1);

namespace Tests\Http\Controllers;

use Tests\TestCase;
use App\Models\User;

class UserControllerTest extends TestCase
{
    /**
     * Tets the the user endpoint returns the correct data
     *
     * @return void
     */
    public function testGet(): void
    {
        $user = User::first();

        $this->actingAs($user)
             ->get("/user")
             ->seeJson([
                 "id" => $user->id,
                 "name" => $user->name,
             ]);
    }
}
