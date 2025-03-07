<?php

namespace App\Events;

use App\Models\Setting;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BroadcastDataEvent implements ShouldBroadcast
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
            new Channel('data-event'),
        ];
    }

    function checkAirQuality($ppm) {
        // Define the air quality ranges and corresponding messages
        $airQuality = [
            'Very Good' => [0, 50],
            'Good' => [51, 100],
            'Moderate' => [101, 150],
            'Unhealthy for Sensitive Groups' => [151, 200],
            'Unhealthy' => [201, 300],
            'Very Unhealthy' => [301, 400],
            'Hazardous' => [401, 500],
            'Beyond Index' => [501, PHP_INT_MAX],
        ];

        // Check the PPM value against the defined ranges
        foreach ($airQuality as $quality => $range) {
            if ($ppm >= $range[0] && $ppm <= $range[1]) {
                return $quality;
            }
        }

        return 'Invalid PPM value';
    }

    function checkCO2Quality($ppm) {
        // Define the CO2 quality ranges and corresponding messages
        $co2Quality = [
            'Excellent' => [0, 400],
            'Good' => [401, 1000],
            'Moderate' => [1001, 2000],
            'Poor' => [2001, 5000],
            'Very Poor' => [5001, 10000],
            'Hazardous' => [10001, PHP_INT_MAX]
        ];

        // Check the PPM value against the defined ranges
        foreach ($co2Quality as $quality => $range) {
            if ($ppm >= $range[0] && $ppm <= $range[1]) {
                return $quality;
            }
        }

        return 'Invalid PPM value';
    }

    function checkSmokeQuality($ppm) {
        // Define the smoke quality ranges and corresponding messages
        $smokeQuality = [
            'Very Good' => [0, 50],
            'Good' => [51, 100],
            'Moderate' => [101, 150],
            'Unhealthy for Sensitive Groups' => [151, 200],
            'Unhealthy' => [201, 300],
            'Very Unhealthy' => [301, 400],
            'Hazardous' => [401, 500],
            'Beyond Index' => [501, PHP_INT_MAX]
        ];

        // Check the PPM value against the defined ranges
        foreach ($smokeQuality as $quality => $range) {
            if ($ppm >= $range[0] && $ppm <= $range[1]) {
                return $quality;
            }
        }

        return 'Invalid PPM value';
    }

    function getCOCategory($coLevel) {
        if ($coLevel <= 4.4) {
            return "Good";
        } elseif ($coLevel <= 9.4) {
            return "Moderate";
        } elseif ($coLevel <= 12.4) {
            return "Unhealthy for Sensitive Groups";
        } elseif ($coLevel <= 15.4) {
            return "Unhealthy";
        } elseif ($coLevel <= 30.4) {
            return "Very Unhealthy";
        } else {
            return "Hazardous";
        }
    }



    public function broadcastWith()
    {
        $data['aq'] = Setting::where('key','aq')->first()->value;
        $data['aq_indikator'] = $this->checkAirQuality((float)Setting::where('key','aq')->first()->value);
        $data['co'] = Setting::where('key','co')->first()->value;
        $data['co_indikator'] = $this->checkCO2Quality((float)Setting::where('key','co')->first()->value);
        $data['smoke'] = Setting::where('key','smoke')->first()->value;
        $data['smoke_indikator'] = $this->checkCO2Quality((float)Setting::where('key','smoke')->first()->value);
        $data['carbon'] = Setting::where('key','carbon')->first()->value;
        $data['carbon_indikator'] = $this->getCOCategory((float)Setting::where('key','carbon')->first()->value);

        return $data;
    }
}
