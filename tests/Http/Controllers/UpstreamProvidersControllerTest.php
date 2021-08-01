<?php

declare(strict_types=1);

namespace Tests\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\UpstreamProvider;

class UpstreamProvidersControllerTest extends TestCase
{
    /**
     * Tests that the upstream providers endpoint returns the correct data
     *
     * @return void
     */
    public function testGet(): void
    {
        $user = User::first();
        $providers = UpstreamProvider::get();

        $this->actingAs($user)
             ->get("/upstream_providers");

        $this->response->assertJson([
            "current_page" => 1,
            "total" => 2,
            "data" => [
               [
                   "id" => $providers[0]->id,
               ],
               [
                   "id" => $providers[1]->id,
               ],
            ],
        ]);
    }
}
