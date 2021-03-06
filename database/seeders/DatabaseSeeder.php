<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(CallsSeeder::class);
        $this->call(EndpointsSeeder::class);
        $this->call(UpstreamProvidersSeeder::class);
    }
}
