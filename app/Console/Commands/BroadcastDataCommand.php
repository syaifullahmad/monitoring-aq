<?php

namespace App\Console\Commands;

use App\Events\BroadcastDataEvent;
use Illuminate\Console\Command;

class BroadcastDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:broadcast-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        while (true) {
                broadcast(new BroadcastDataEvent());
                sleep(2);
        }
    }
}
