<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->insert([
            "created_at" => new \DateTime(),
            "updated_at" => new \DateTime(),
            "name" => "Test User",
            "api_key" => "secret",
            "last_accessed" => new \DateTime(),
        ]);
    }
}
