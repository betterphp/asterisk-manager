<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Call;

class CallsSeeder extends Seeder
{
    /**
     * Create test logged calls
     *
     * @return void
     */
    public function run(): void
    {
        for ($i = 0; $i < 200; ++$i) {
            Call::factory()->create([]);
        }
    }
}
