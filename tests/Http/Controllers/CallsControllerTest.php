<?php

declare(strict_types=1);

namespace Tests\Http\Controllers;

use Tests\TestCase;
use App\Models\Call;
use App\Models\User;

class CallsControllerTest extends TestCase
{
    public function testGet(): void
    {
        $user = User::factory()->create();
        $call = Call::factory()->create();

        $this->actingAs($user)
             ->get("/calls")
             ->seeJson([
                 "current_page" => 1,
                 "total" => 1,
                 "data" => [
                     [
                         "id" => $call->id,
                     ],
                 ]
             ]);
    }
}
