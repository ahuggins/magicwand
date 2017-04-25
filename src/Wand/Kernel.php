<?php

namespace AHuggins\Wand;

use Illuminate\Console\Scheduling\Schedule;

class Kernel extends WandConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \AHuggins\Wand\Commands\TestCommand::class,
        \AHuggins\Wand\Commands\ConsoleMakeCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/wand.php');
    }
}
