<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aq;
use App\Models\Co;
use App\Models\Smoke;
use App\Models\Carbon as CarbonMonoksida;
use Excel;
use App\Exports\HistoryExport;
use Carbon\Carbon;

class HistoryController extends Controller
{
  public function index()
  {
      // Mengambil data terbaru dari model Aq dan mengurutkan berdasarkan created_at secara menurun (terbaru di atas)
      $data['aq'] = Aq::orderBy('created_at', 'DESC')->limit(200)->get();
      
      // Mengambil 200 data terbaru dari model Co dan mengurutkan berdasarkan created_at secara menurun (terbaru di atas)
      $data['co'] = Co::orderBy('created_at', 'DESC')->limit(200)->get();
      
      // Mengambil 200 data terbaru dari model Smoke dan mengurutkan berdasarkan created_at secara menurun (terbaru di atas)
      $data['smoke'] = Smoke::orderBy('created_at', 'DESC')->limit(200)->get();
      
      // Mengambil 200 data terbaru dari model CarbonMonoksida dan mengurutkan berdasarkan created_at secara menurun (terbaru di atas)
      $data['carbon'] = CarbonMonoksida::orderBy('created_at', 'DESC')->limit(200)->get();
  
      // Mengembalikan tampilan 'history' dengan data yang telah diambil
      return view('history', $data);
  }
  

    public function export()
  {
      return Excel::download(new HistoryExport, 'history_aq.xlsx');
  }

}
