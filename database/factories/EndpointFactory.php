<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Endpoint;
use Illuminate\Database\Eloquent\Factories\Factory;

class EndpointFactory extends Factory
{
    /**
     * The model that this factory will create instances of
     *
     * @var string
     * @phan-var class-string<Endpoint>
     */
    protected $model = Endpoint::class;

    /**
     * Get the endpoint definition
     *
     * @return array
     * @phan-return array<string, mixed>
     */
    public function definition(): array
    {
        $number = $this->faker->numberBetween(100, 999);

        return [
            "display_name" => $this->faker->name(),
            "number" => $number,
            "username" => $number,
            "password" => "secret",
        ];
    }
}
