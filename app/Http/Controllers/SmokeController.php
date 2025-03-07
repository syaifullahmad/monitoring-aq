<?php

namespace App\Http\Controllers;

use App\Models\Aq;
use App\Models\Co;
use App\Models\Smoke;
use Carbon\Carbon;
use App\Models\Carbon as CarbonMonoksida;
use Illuminate\Http\Request;

class SmokeController extends Controller
{
    public function index()
    {
    
        $createdAtDates_smoke = Smoke::orderBy('id','DESC')->limit(20)->pluck('created_at');
        $formattedDates_smoke = $createdAtDates_smoke->map(function ($date) {
            return Carbon::parse($date)->format('d-m-Y H:i:s');
        });

        $data['smoke']['data'] = Smoke::orderBy('id','DESC')->limit(20)->get()->pluck('value');
        $data['smoke']['tanggal'] = $formattedDates_smoke;

        $serverTime = Carbon::now();
        $data['serverTime'] = $serverTime->format('l, F j, Y g:i A');

        return view('smoke', $data);
    }
}
