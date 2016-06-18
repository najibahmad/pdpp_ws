<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class DashboardController extends Controller
{
    public function adminHome()
    {
      //barchart per provinsi
      $pesantrens = DB::select('SELECT v.nama_provinsi, COUNT(*) AS jumlah FROM pesantren AS p
                    JOIN kabupaten AS k ON p.kabupaten_id_kabupaten = k.id_kabupaten
                    JOIN provinsi AS v ON k.provinsi_id_provinsi = v.id_provinsi
                    GROUP BY v.id_provinsi');

      $nama_provinsi = [];
      $jmlpesantrens = [];
      foreach ($pesantrens as $pesantren) {
           array_push($nama_provinsi, $pesantren->nama_provinsi); //$pesantren->nama_kabupaten
           array_push($jmlpesantrens, $pesantren->jumlah);
      }

      //pie chart: santri mukin vs tidak mukim
      $pie_chart = DB::table('pesantren')
      					->select(DB::raw('SUM(jumlah_santri) as jumlah_santri, SUM(jumlah_santri_mukim) as jumlah_santri_mukim'))
      					->get();
      // dd($pe);

      return view('admin.index', compact('nama_provinsi', 'jmlpesantrens', 'pie_chart'));
    }
}
