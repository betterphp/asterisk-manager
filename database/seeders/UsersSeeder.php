<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Create test user accounts
     *
     * @retuen void
     */
    public function run()
    {
        User::factory()->create([
            "name" => "Test User",
            "api_key" => "secret",
        ]);
    }
}
