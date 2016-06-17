<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Provinsi;
use App\Pesantren;
use App\Http\Requests\ProvinsiRequest;
use DB;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
      // $nama_provinsi = [];
      // $jmlpesantrens = [];
      // foreach (Provinsi::all() as $pesantren) {
      //     array_push($nama_provinsi, $pesantren->kabupaten->provinsi->nama_provinsi);
      //     foreach ($pesantren->kabupaten->provinsi->id_provinsi){
      //         array_push($jmlpesantrens, $pesantren->kabupaten->count());
      //     }
      // }

      // $nama_provinsi = [];
      // $jmlpesantrens = [];
      // foreach (Provinsi::all() as $kabupaten) {
      //     array_push($nama_provinsi, $kabupaten->nama_provinsi);
      //     array_push($jmlpesantrens, $kabupaten->kabupatens->count());
      // }


      // SELECT name,COUNT(*) as count FROM tablename GROUP BY name ORDER BY count DESC;
      // Select P.ProductName, Count(*)
      // From tblItems As I
      //     Join tblProducts As P
      //         On P.ProductId = I.ProductId
      // Group By P.ProductName

      // berhasil -- jumlah pesantren berdasarkan kabupaten
      // $pesantrens = DB::select('SELECT k.nama_kabupaten, COUNT(*) AS jumlah
      //               FROM pesantren AS p JOIN kabupaten AS k ON p.kabupaten_id_kabupaten = k.id_kabupaten
      //               GROUP BY k.nama_kabupaten');


      $pesantrens = DB::select('SELECT v.nama_provinsi, COUNT(*) AS jumlah FROM pesantren AS p
                    JOIN kabupaten AS k ON p.kabupaten_id_kabupaten = k.id_kabupaten
                    JOIN provinsi AS v ON k.provinsi_id_provinsi = v.id_provinsi
                    GROUP BY v.id_provinsi');

      // $pesantrens = DB::table('pesantren')
      //         ->select('nama_pesantren','')
      //         ->leftJoin('kabupaten', 'pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
      //         ->Join('provinsi', 'kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
      //         ->where('provinsi.id_provinsi',1)
      //         ->groupBy('pesantren.id_pesantren')
      //         ->get();
      $nama_provinsi = [];
      $jmlpesantrens = [];
      foreach ($pesantrens as $pesantren) {
           array_push($nama_provinsi, $pesantren->nama_provinsi); //$pesantren->nama_kabupaten
           array_push($jmlpesantrens, $pesantren->jumlah);
      }

      //dd($nama_provinsi,$jmlpesantrens);

      return view('admin.index', compact('nama_provinsi', 'jmlpesantrens'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $prov = Provinsi::all();
      $counter = 0;
      return view('provinsi.prov', compact('prov', 'counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvinsiRequest $request)
    {
        Provinsi::create($request->all());

        \Session::flash('pesan','Provinsi baru telah berhasil dimasukan!');

        return redirect('admin/provinsi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prov = Provinsi::findOrFail($id);

        return view('provinsi.edit', compact('prov'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProvinsiRequest $request, $id)
    {
        //Find or Fail to get ID
        $prov = Provinsi::findOrFail($id);

        //Save record to the database
        $prov->update($request->all());

        //Return to universities controller
        return redirect('admin/provinsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Provinsi::destroy($id);

        return redirect('admin/provinsi');
    }
}
