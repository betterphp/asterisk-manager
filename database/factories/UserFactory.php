<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Get the user definition
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
        ];
    }
}
