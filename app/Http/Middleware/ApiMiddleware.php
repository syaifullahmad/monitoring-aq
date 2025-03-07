<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('API-KEY')!=env("API_KEY","9nZmjxB83vwynwr")){
            $data['status'] = false;
            $data['code'] = 401;
            $data['message'] = "Unauthorized!";


            $response = [
                'status'  =>  false,
                'response_code'  =>  403,
                'data'  => "Unauthorized!",
            ];

            return response()->json($response,200);
        }
        return $next($request);
    }
}
