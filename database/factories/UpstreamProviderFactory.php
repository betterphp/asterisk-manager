<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\UpstreamProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class UpstreamProviderFactory extends Factory
{
    /**
     * The model that this factory will create instances of
     *
     * @var string
     * @phan-var class-string<UpstreamProvider>
     */
    protected $model = UpstreamProvider::class;

    /**
     * Generate upstream provider fields
     *
     * @return array
     * @phan-return array<string, mixed>
     */
    public function definition(): array
    {
        $created_at = $this->faker->dateTimeBetween("-6 months", "-1 month");
        $number = \str_replace("-", "", $this->faker->phoneNumber);
        $sip_host = "sip.{$this->faker->domainName}";

        return [
            "created_at" => $created_at,
            "updated_at" => $created_at,
            "display_name" => $this->faker->randomElement([
                "AQL",
                "Andrews and Arnold",
                "Text Now",
                "Atomic",
                "3CX",
                "VoiceHost",
                "Voipfone",
            ]),
            "username" => $number,
            "password" => "secret",
            "contact" => "sip:{$number}@{$sip_host}",
            "should_register" => $this->faker->boolean,
            "server_uri" => "sip:{$sip_host}",
            "client_uri" => "sip:{$number}@{$sip_host}",
        ];
    }
}
