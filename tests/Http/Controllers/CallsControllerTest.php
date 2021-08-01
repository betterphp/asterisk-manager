<?php

declare(strict_types=1);

namespace Tests\Http\Controllers;

use Tests\TestCase;
use App\Models\Call;
use App\Models\User;

class CallsControllerTest extends TestCase
{
    /**
     * Tests that the calls endpoint returns the correct data
     *
     * @return void
     */
    public function testGet(): void
    {
        $user = User::first();
        $calls = Call::query()->get();

        $this->actingAs($user)
             ->get("/calls");

        $this->response->assertJson([
            "current_page" => 1,
            "total" => $calls->count(),
            "data" => [
                [
                    "id" => $calls->first()->id,
                ],
            ],
        ]);
    }
}
