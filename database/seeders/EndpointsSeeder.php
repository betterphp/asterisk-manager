<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Endpoint;

class EndpointsSeeder extends Seeder
{
    /**
     * Creates test endpoints
     *
     * @return void
     */
    public function run(): void
    {
        for ($i = 10; $i < 20; ++$i) {
            Endpoint::factory()->create([
                "number" => $i,
            ]);
        }
    }
}
