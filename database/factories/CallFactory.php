<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Call;
use Illuminate\Database\Eloquent\Factories\Factory;

class CallFactory extends Factory
{
    /**
     * The model that this factory will create instances of
     *
     * @var string
     * @phan-var class-string<Call>
     */
    protected $model = Call::class;

    /**
     * Gets the call definition
     *
     * @retuen array
     * @phan-return array<string, mixed>
     */
    public function definition(): array
    {
        $src_extension = $this->faker->numberBetween(10, 99);
        $dialed_number = \str_replace("-", "", $this->faker->phoneNumber);

        $start = $this->faker->dateTimeBetween("-2 weeks", "-2 hours");

        $answer = clone $start;
        $end = clone $start;

        $answer->modify("+5 seconds");
        $end->modify("+" . $this->faker->numberBetween(10, 60) . " minutes");

        $duration = $start->diff($end);
        $billsec = $answer->diff($end);

        return [
            "clid" => "\"{$src_extension}\" <{$src_extension}>",
            "src" => $src_extension,
            "dialed" => $dialed_number,
            "dst" => $dialed_number,
            "dcontext" => "public",
            "channel" => "PJSIP/{$src_extension}-00000000",
            "dstchannel" => "PJSIP/outgoing-000000000",
            "lastapp" => "Dial",
            "lastdata" => "PJSIP/{$dialed_number}@outgoing,30,g",
            "start" => $start,
            "answer" => $answer,
            "end" => $end,
            "duration" => $duration->i * 60 + $duration->s,
            "billsec" => $billsec->i * 60 + $billsec->s,
            "disposition" => "ANSWERED",
            "amaflags" => "DOCUMENTATION",
            "uniqueid" => \microtime(true),
            "linkedid" => \microtime(true),
            "sequence" => 1,
        ];
    }
}
