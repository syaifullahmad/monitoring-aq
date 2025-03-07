<?php

namespace App\Console\Commands;

use App\Models\Setting;
use Illuminate\Console\Command;

class DummyDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dummy-data';

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
            $aq = Setting::where('key','aq')->first();
            $aq->value = rand(0, 600);
            $aq->save();

            $co = Setting::where('key','co')->first();
            $co->value = rand(0, 2000);
            $co->save();

            $smoke = Setting::where('key','smoke')->first();
            $smoke->value = rand(0, 600);
            $smoke->save();

            $carbon = Setting::where('key','carbon')->first();
            $carbon->value = rand(0, 30);
            $carbon->save();

            sleep(2);
        }
    }
}
