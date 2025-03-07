<?php

namespace App\Http\Controllers;

use App\Models\Aq;
use App\Models\Co;
use App\Models\Smoke;
use Carbon\Carbon;
use App\Models\Carbon as CarbonMonoksida;
use Illuminate\Http\Request;

class Co2Controller extends Controller
{
    public function index()
    {
    
        $createdAtDates_co = Co::orderBy('id','DESC')->limit(20)->pluck('created_at');
        $formattedDates_co = $createdAtDates_co->map(function ($date) {
            return Carbon::parse($date)->format('d-m-Y H:i:s');
        });


        $data['co']['data'] = Co::orderBy('id','DESC')->limit(20)->get()->pluck('value');
        $data['co']['tanggal'] = $formattedDates_co;

        $serverTime = Carbon::now();
        $data['serverTime'] = $serverTime->format('l, F j, Y g:i A');
        
        return view('co', $data);
    }
}
