<?php

namespace App\Events;

use App\Models\Aq;
use App\Models\Co;
use App\Models\Setting;
use App\Models\Smoke;
use Carbon\Carbon;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use App\Models\Carbon as CarbonMonoksida;

class BroadcastChartEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('data-chart'),
        ];
    }

    public function broadcastWith()
    {

        $createdAtDates_aq = Aq::orderBy('id','DESC')->limit(20)->pluck('created_at');
        $formattedDates_aq = $createdAtDates_aq->map(function ($date) {
            return Carbon::parse($date)->format('d-m-Y H:i:s');
        });

        $createdAtDates_co = Co::orderBy('id','DESC')->limit(20)->pluck('created_at');
        $formattedDates_co = $createdAtDates_co->map(function ($date) {
            return Carbon::parse($date)->format('d-m-Y H:i:s');
        });

        $createdAtDates_smoke = Smoke::orderBy('id','DESC')->limit(20)->pluck('created_at');
        $formattedDates_smoke = $createdAtDates_smoke->map(function ($date) {
            return Carbon::parse($date)->format('d-m-Y H:i:s');
        });

        $createdAtDates_carbon = CarbonMonoksida::orderBy('id','DESC')->limit(20)->pluck('created_at');
        $formattedDates_carbon = $createdAtDates_carbon->map(function ($date) {
            return Carbon::parse($date)->format('d-m-Y H:i:s');
        });

        $data['aq']['data'] = Aq::orderBy('id','DESC')->limit(20)->get()->pluck('value');
        $data['aq']['tanggal'] = $formattedDates_aq;

        $data['co']['data'] = Co::orderBy('id','DESC')->limit(20)->get()->pluck('value');
        $data['co']['tanggal'] = $formattedDates_co;

        $data['smoke']['data'] = Smoke::orderBy('id','DESC')->limit(20)->get()->pluck('value');
        $data['smoke']['tanggal'] = $formattedDates_smoke;

        $data['carbon']['data'] = CarbonMonoksida::orderBy('id','DESC')->limit(20)->get()->pluck('value');
        $data['carbon']['tanggal'] = $formattedDates_carbon;

        return $data;
    }
}
