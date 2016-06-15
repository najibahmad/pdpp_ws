<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pesantren;
use App\Provinsi;
use App\Kabupaten;
use DB;
use Input;

class LaporanController extends Controller
{
    public function pesantrenByProvinsi()
    {
        $prov = DB::table('provinsi')
              ->where('id_provinsi', 1)
              ->pluck('nama_provinsi');

              // dd($id_provinsi);

        $provinsi = Provinsi::lists('nama_provinsi','id_provinsi');

        $pesantren = DB::table('pesantren')
    			      ->select(['pesantren.nama_pesantren', 'pesantren.nama_pengasuh', 'pesantren.jumlah_santri','kabupaten.nama_kabupaten'])
                ->leftJoin('kabupaten', 'pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                ->Join('provinsi', 'kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                ->where('provinsi.id_provinsi',1)
                ->groupBy('pesantren.id_pesantren')
                //->paginate(15);
                ->get();

     		$counter = 0;

        return view('admin.pesbyprov',compact('provinsi','prov','pesantren','counter'));
    }

    public function pesantrenByProvinsi2(Request $request)
    {
        $id_provinsi = $request->provinsi_id_provinsi;

        $prov = DB::table('provinsi')
	            	->where('id_provinsi', '=', $id_provinsi)
	            	->get();

        $provinsi = Provinsi::lists('nama_provinsi','id_provinsi');

        $pesantren = DB::table('pesantren')
    			      ->select(['pesantren.nama_pesantren', 'pesantren.nama_pengasuh', 'pesantren.jumlah_santri','kabupaten.nama_kabupaten'])
                ->leftJoin('kabupaten', 'pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                ->Join('provinsi', 'kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                ->where('provinsi.id_provinsi',$id_provinsi)
                ->groupBy('pesantren.id_pesantren')
                //->paginate(15);
                ->get();

            //$univ = "Semua Universitas";
            //$totalAktif= Departement::where('status', '=', 1)->count();
            //$totalNonAktif= Departement::where('status', '=', '')->count();
            //$count = User::where('votes', '>', 100)->count();
            // dd($totalNonAktif);
    		    // dd($dept);
     		$counter = 0;

        return view('admin.pesbyprov',compact('provinsi','prov','pesantren','counter'));
    }

    public function pesantrenByKabupaten()
    {
        $kab = DB::table('kabupaten')
              ->where('id_kabupaten', 1)
              ->pluck('nama_kabupaten');

        $kabupaten = Kabupaten::lists('nama_kabupaten','id_kabupaten');

        $pesantren = DB::table('pesantren')
    			      ->select(['pesantren.nama_pesantren', 'pesantren.nama_pengasuh', 'pesantren.jumlah_santri','kabupaten.nama_kabupaten'])
                ->Join('kabupaten', 'pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                ->leftJoin('provinsi', 'kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                ->where('kabupaten.id_kabupaten',1)
                ->groupBy('pesantren.id_pesantren')
                //->paginate(15);
                ->get();

     		$counter = 0;

        return view('admin.pesbykab',compact('kabupaten','kab','pesantren','counter'));
    }

    public function pesantrenByKabupaten2(Request $request)
    {
        $id_kabupaten = $request->kabupaten_id_kabupaten;

        $kab = DB::table('kabupaten')
              ->where('id_kabupaten', 1)
              ->pluck('nama_kabupaten');

        $kabupaten = Kabupaten::lists('nama_kabupaten','id_kabupaten');

        $pesantren = DB::table('pesantren')
    			      ->select(['pesantren.nama_pesantren', 'pesantren.nama_pengasuh', 'pesantren.jumlah_santri','kabupaten.nama_kabupaten'])
                ->Join('kabupaten', 'pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                ->leftJoin('provinsi', 'kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                ->where('kabupaten.id_kabupaten', $id_kabupaten)
                ->groupBy('pesantren.id_pesantren')
                //->paginate(15);
                ->get();

     		$counter = 0;

        return view('admin.pesbykab',compact('kabupaten','kab','pesantren','counter'));
    }
}
