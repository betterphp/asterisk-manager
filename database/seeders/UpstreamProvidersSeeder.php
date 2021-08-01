<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UpstreamProvider;

class UpstreamProvidersSeeder extends Seeder
{
    /**
     * Create test upstream providers
     *
     * @return void
     */
    public function run(): void
    {
        for ($i = 0; $i < 2; ++$i) {
            UpstreamProvider::factory()->create();
        }
    }
}
