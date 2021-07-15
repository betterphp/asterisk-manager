<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The model that this factory will create instances of
     *
     * @var string
     * @phan-var class-string<User>
     */
    protected $model = User::class;

    /**
     * Get the user definition
     *
     * @return array
     * @phan-return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "api_key" => $this->faker->sha1,
        ];
    }
}
