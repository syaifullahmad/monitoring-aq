<?php

namespace App\Exports;

use App\Models\Aq;
use App\Models\Co;
use App\Models\Smoke;
use App\Models\Carbon as CarbonMonoksida;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class HistoryExport implements FromView
{
  public function view(): View
  {
      // Mengambil 8000 data terbaru dari model Aq dan mengurutkan berdasarkan created_at secara menurun (terbaru di atas)
      $data['aq'] = Aq::orderBy('created_at', 'DESC')->limit(8000)->get();
      
      // Mengambil 8000 data terbaru dari model Co dan mengurutkan berdasarkan created_at secara menurun (terbaru di atas)
      $data['co'] = Co::orderBy('created_at', 'DESC')->limit(8000)->get();
      
      // Mengambil 8000 data terbaru dari model Smoke dan mengurutkan berdasarkan created_at secara menurun (terbaru di atas)
      $data['smoke'] = Smoke::orderBy('created_at', 'DESC')->limit(8000)->get();
      
      // Mengambil 8000 data terbaru dari model CarbonMonoksida dan mengurutkan berdasarkan created_at secara menurun (terbaru di atas)
      $data['carbon'] = CarbonMonoksida::orderBy('created_at', 'DESC')->limit(8000)->get();
  
      // Mengembalikan tampilan 'exports.history' dengan data yang telah diambil
      return view('exports.history', $data);
  }  
}
