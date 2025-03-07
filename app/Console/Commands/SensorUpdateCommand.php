<?php

namespace App\Console\Commands;

use App\Events\BroadcastChartEvent;
use App\Models\Aq;
use App\Models\Co;
use App\Models\Setting;
use App\Models\Smoke;
use App\Models\Carbon as CarbonMonoksida;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SensorUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sensor-update';

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

            $data['aq'] = Setting::where('key','aq')->first()->value;

            $data['co'] = Setting::where('key','co')->first()->value;

            $data['smoke'] = Setting::where('key','smoke')->first()->value;

            $data['carbon'] = Setting::where('key','carbon')->first()->value;


            $aq = new Aq;
            $aq->value = $data['aq'];
            $aq->save();

            $co = new Co;
            $co->value = $data['co'];
            $co->save();

            $smoke = new Smoke;
            $smoke->value = $data['smoke'];
            $smoke->save();

            $carbon = new CarbonMonoksida;
            $carbon->value = $data['carbon'];
            $carbon->save();

            broadcast(new BroadcastChartEvent());

            sleep(10);
        }
    }
}
