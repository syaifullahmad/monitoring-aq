<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SensorController extends Controller
{

    function responseSuccess($data,$status=true,$code =200)
    {
        $response = [
            'status'  =>  $status,
            'response_code'  =>  $code,
            'data'  =>  $data,
        ];

        return response()->json($response,200);
    }

    public function post(Request $request)
    {
        $data = json_decode(json_encode($request->all()));
        $aq = Setting::where('key','aq')->first();
        $aq->value = $data->air_quality;
        $aq->save();

        $co = Setting::where('key','co')->first();
        $co->value = $data->co2;
        $co->save();

        $smoke = Setting::where('key','smoke')->first();
        $smoke->value = $data->smoke_level;
        $smoke->save();

        $carbon = Setting::where('key','carbon')->first();
        $carbon->value = $data->carbon_monoksida;
        $carbon->save();
        return $this->responseSuccess("Post data sukses!");

    }
}
