<?php

declare(strict_types=1);

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Command;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * List of commands provided by the application
     *
     * @var array
     * @phan-var list<class-string<Command>>
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule The scheduler
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }
}
