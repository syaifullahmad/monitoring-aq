<?php

namespace App\Http\Controllers;

use App\Models\Aq;
use App\Models\Co;
use App\Models\Smoke;
use Carbon\Carbon;
use App\Models\Carbon as CarbonMonoksida;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
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

        $serverTime = Carbon::now();
        $data['serverTime'] = $serverTime->format('l, F j, Y g:i A');

        return view('dashboard', $data);
    }
}
