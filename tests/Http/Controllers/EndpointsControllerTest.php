<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Tests\TestCase;
use App\Models\Endpoint;
use App\Models\User;

class EndpointsControllerTest extends TestCase
{
    public function testGet(): void
    {
        $user = User::first();
        $endpoints = Endpoint::get();

        $this->actingAs($user)
             ->get("/endpoints");

        $this->response->assertJson([
            "current_page" => 1,
            "total" => $endpoints->count(),
            "data" => $endpoints->map(
                /**
                 * @phan-return array<string, mixed>
                 */
                fn (Endpoint $endpoint): array => $endpoint->toArray()
            )->toArray(),
        ]);
    }
}
