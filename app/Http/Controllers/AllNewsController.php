<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllNewsController extends Controller
{
    public function index()
    {
        return view('news.allnews');
    }
}
