<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pesantren;
use App\Kabupaten;
use App\Pengasuh;
use App\Http\Requests\PesantrenRequest;
use App\Provinsi;
use DB;

class PesantrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $id_provinsi = $request->provinsi_id_provinsi;
      // $id_kabupaten = $request->kabupaten_id_kabupaten;
      // $text = $request->cari;
      //
      // dd($id_provinsi,$id_kabupaten,$text);

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
                  ->where('pesantren.kabupaten_id_kabupaten', '=', $id_kabupaten)
                  ->where('nama_pesantren', 'like', '%'.$text.'%')
                  ->get();
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

      // $pengasuh = Pengasuh::lists('nama_pengasuh','id_pengasuh');

      return view('pesantren.create',compact('kabupaten'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PesantrenRequest $request)
    {
      Pesantren::create($request->all());

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

      // $pengasuh = Pengasuh::lists('nama_pengasuh','id_pengasuh');

      return view('pesantren.edit',compact('kabupaten','pesantren'));
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

      //Save record to the database
      $pesantren->update($request->all());

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
      Pesantren::destroy($id);

      return redirect('admin/pesantren');
    }
}
