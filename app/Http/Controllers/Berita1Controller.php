<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Berita1Controller extends Controller
{
    public function index()
    {
        return view('news.berita1');
    }
}
