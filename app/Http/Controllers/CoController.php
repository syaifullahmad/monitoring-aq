<?php

namespace App\Http\Controllers;

use App\Models\Aq;
use App\Models\Co;
use App\Models\Smoke;
use Carbon\Carbon;
use App\Models\Carbon as CarbonMonoksida;
use Illuminate\Http\Request;

class CoController extends Controller
{
    public function index()
    {
    
        $createdAtDates_carbon = CarbonMonoksida::orderBy('id','DESC')->limit(20)->pluck('created_at');
        $formattedDates_carbon = $createdAtDates_carbon->map(function ($date) {
            return Carbon::parse($date)->format('d-m-Y H:i:s');
        });

        $data['carbon']['data'] = CarbonMonoksida::orderBy('id','DESC')->limit(20)->get()->pluck('value');
        $data['carbon']['tanggal'] = $formattedDates_carbon;

        $serverTime = Carbon::now();
        $data['serverTime'] = $serverTime->format('l, F j, Y g:i A');

        return view('carbon', $data);
    }
}
