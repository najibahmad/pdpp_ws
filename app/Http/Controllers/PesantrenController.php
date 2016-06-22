<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pesantren;
use App\Kabupaten;
use App\Pengasuh;
use App\Http\Requests\PesantrenRequest;
use App\Provinsi;
use DB;
use App\Potensi_ekonomi;
use App\Tipe_pesantren;
use App\Konsentrasi;
use App\Santri;
use App\Tenaga_pengajar;

class PesantrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $provinsi = Provinsi::lists('nama_provinsi','id_provinsi');

      //$pesantren = Pesantren::all('id_pesantren','NSPP','nama_pesantren','nama_pengasuh','jumlah_santri','kabupaten_id_kabupaten');
      //$prov = Provinsi::all();
      $pesantren = "";
      return view('pesantren.pesantren', compact('pesantren','provinsi'));
    }

    public function index2(Request $request)
    {
      $id_provinsi = $request->provinsi_id_provinsi;
      $id_kabupaten = $request->kabupaten_id_kabupaten;
      $text = $request->cari;
      // dd($id_provinsi,$id_kabupaten,$text);

      $pesantren = "";

      $provinsi = Provinsi::lists('nama_provinsi','id_provinsi');

      //$pesantren = Pesantren::all('id_pesantren','NSPP','nama_pesantren','nama_pengasuh','jumlah_santri','kabupaten_id_kabupaten');

      // $pesantren = Pesantren::all('id_pesantren','NSPP','nama_pesantren','nama_pengasuh','jumlah_santri','kabupaten_id_kabupaten');
      // $pesantren = Pesantren::limit(15)->offset(0)->get();

      if ($id_kabupaten==0)
      {
        if ($text=="")
        {
          $pesantren = DB::table('pesantren')
                    ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                    ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                    //->select('id_pesantren','NSPP','nama_pesantren','nama_pengasuh','jumlah_santri','alamat_pesantren','nama_kabupaten','nama_provinsi')
          					->where('kabupaten.provinsi_id_provinsi', '=', $id_provinsi)
          					//->where('nama_pesantren', 'like', '%'.$text.'%')
                    ->get();
        }else{
          $pesantren = DB::table('pesantren')
                    ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                    ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                    //->select('id_pesantren','NSPP','nama_pesantren','nama_pengasuh','jumlah_santri','alamat_pesantren','nama_kabupaten','nama_provinsi')
          					->where('kabupaten.provinsi_id_provinsi', '=', $id_provinsi)
          					->where('nama_pesantren', 'like', '%'.$text.'%')
                    ->get();
        }
      }else{
        if ($text=="")
        {
          $pesantren = DB::table('pesantren')
                    ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                    ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                    //->select('id_pesantren','NSPP','nama_pesantren','nama_pengasuh','jumlah_santri','alamat_pesantren','nama_kabupaten','nama_provinsi')
                    ->where('kabupaten.provinsi_id_provinsi', '=', $id_provinsi)
                    ->where('pesantren.kabupaten_id_kabupaten', '=', $id_kabupaten)
                    //->where('nama_pesantren', 'like', '%'.$text.'%')
                    ->get();
        }else{
          $pesantren = DB::table('pesantren')
                    ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                    ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                    //->select('id_pesantren','NSPP','nama_pesantren','nama_pengasuh','jumlah_santri','alamat_pesantren','nama_kabupaten','nama_provinsi')
                    ->where('kabupaten.provinsi_id_provinsi', '=', $id_provinsi)
                    ->where('pesantren.kabupaten_id_kabupaten', '=', $id_kabupaten)
                    ->where('nama_pesantren', 'like', '%'.$text.'%')
                    ->get();
        }
      }

      // dd($pesantren);
      //$prov = Provinsi::all();
      return view('pesantren.pesantren', compact('pesantren','provinsi'));
    }


    public function getKabupaten($id)
    {
      $kabupatens = Kabupaten::where('provinsi_id_provinsi', '=', $id)->get();
      //dd($kabupatens);
      $options = array(0 => 'Semua Kabupaten');

      foreach ($kabupatens as $kabupaten) {
          $options += array($kabupaten->id_kabupaten => $kabupaten->nama_kabupaten);
      }
      return $options;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $kabupaten = Kabupaten::lists('nama_kabupaten','id_kabupaten');

      $tipe_pesantren = Tipe_pesantren::lists('nama_tipe_pesantren','id_tipe_pesantren');
      $potensi_ekonomi = Potensi_ekonomi::lists('nama_potensi_ekonomi','id_potensi_ekonomi');
      $konsentrasi = Konsentrasi::lists('nama_konsentrasi','id_konsentrasi');

      return view('pesantren.create',compact('kabupaten','tipe_pesantren','potensi_ekonomi','konsentrasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PesantrenRequest $request)
    {
      $santri = Santri::create($request->only(['jumlah_santri_mukim_pria', 'jumlah_santri_mukim_wanita',
                'jumlah_santri_tidak_mukim_pria','jumlah_santri_tidak_mukim_wanita']));

      $tenaga_pengajar = Tenaga_pengajar::create($request->only(['nonformal_pria', 'nonformal_wanita',
                'formal_nonsarjana_pria','formal_nonsarjana_wanita',
                'formal_sarjana_pria','formal_sarjana_wanita',
                'formal_pascasarjana_pria','formal_pascasarjana_wanita']));

      $tenaga_pengajar_id = $santri->id_santri;
      $santri_id = $tenaga_pengajar->id_tenaga_pengajar;

      $pesantren = Pesantren::create($request->only(['NSPP','nama_pesantren','alamat_pesantren','kecamatan_pesantren',
        'no_telepon','website','nama_pengasuh','longitude','latitude','tahun_berdiri','kabupaten_id_kabupaten',
        'tipe_pesantren_id','potensi_ekonomi_id','konsentrasi_id']));

      $pesantren->tenaga_pengajar_id = $tenaga_pengajar_id;
      $pesantren->santri_id = $santri_id;

      $pesantren->save();

       \Session::flash('pesan','Pesantren baru telah berhasil dimasukan!');

      return redirect('admin/pesantren');
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
      $pesantren = Pesantren::findOrFail($id);

      $kabupaten = Kabupaten::lists('nama_kabupaten','id_kabupaten');

      $tipe_pesantren = Tipe_pesantren::lists('nama_tipe_pesantren','id_tipe_pesantren');
      $potensi_ekonomi = Potensi_ekonomi::lists('nama_potensi_ekonomi','id_potensi_ekonomi');
      $konsentrasi = Konsentrasi::lists('nama_konsentrasi','id_konsentrasi');

      $santri = Santri::where('id_santri','=',$pesantren->santri_id)->get();
      $tenaga_pengajar = Tenaga_pengajar::where('id_tenaga_pengajar','=',$pesantren->tenaga_pengajar_id)->get();

      // dd($santri);

      return view('pesantren.edit',compact('tenaga_pengajar','santri','kabupaten','pesantren','tipe_pesantren','potensi_ekonomi','konsentrasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PesantrenRequest $request, $id)
    {
      $pesantren = Pesantren::findOrFail($id);

      $tenaga_pengajar = Tenaga_pengajar::find($pesantren->tenaga_pengajar_id);
      $santri = Santri::find($pesantren->santri_id);

      if($tenaga_pengajar=="" AND $santri==""){
        $santri = Santri::create($request->only(['jumlah_santri_mukim_pria', 'jumlah_santri_mukim_wanita',
                  'jumlah_santri_tidak_mukim_pria','jumlah_santri_tidak_mukim_wanita']));

        $tenaga_pengajar = Tenaga_pengajar::create($request->only(['nonformal_pria', 'nonformal_wanita',
                  'formal_nonsarjana_pria','formal_nonsarjana_wanita',
                  'formal_sarjana_pria','formal_sarjana_wanita',
                  'formal_pascasarjana_pria','formal_pascasarjana_wanita']));

        $pesantren->tenaga_pengajar_id = $tenaga_pengajar->id_tenaga_pengajar;
        $pesantren->santri_id = $santri->id_santri;

        $pesantren->save();
      }else{
        $tenaga_pengajar->update($request->only(['jumlah_santri_mukim_pria', 'jumlah_santri_mukim_wanita',
                  'jumlah_santri_tidak_mukim_pria','jumlah_santri_tidak_mukim_wanita']));
        $santri->update($request->only(['nonformal_pria', 'nonformal_wanita',
                  'formal_nonsarjana_pria','formal_nonsarjana_wanita',
                  'formal_sarjana_pria','formal_sarjana_wanita',
                  'formal_pascasarjana_pria','formal_pascasarjana_wanita']));
      }

      //Save record to the database
      $pesantren->update($request->only(['NSPP','nama_pesantren','alamat_pesantren','kecamatan_pesantren',
        'no_telepon','website','nama_pengasuh','longitude','latitude','tahun_berdiri','kabupaten_id_kabupaten',
        'tipe_pesantren_id','potensi_ekonomi_id','konsentrasi_id']));

      // $pesantren->save();
      \Session::flash('pesan','Data Pesantren telah berhasil diperbaharui!');
      //Return to universities controller
      return redirect('admin/pesantren');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //find pesantren details
      $pesantren = Pesantren::findOrFail($id);

      //first destroy tenaga_pengajar for current pesantren
      Tenaga_pengajar::destroy($pesantren->tenaga_pengajar_id);
      //second destroy santri for current pesantren
      Santri::destroy($pesantren->santri_id);
      //last destroy pesantren with $id itself
      Pesantren::destroy($id);

      return redirect('admin/pesantren');
    }
}
