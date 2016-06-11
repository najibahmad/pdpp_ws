<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pesantren;
use App\Kabupaten;
use App\Pengasuh;
use App\Http\Requests\PesantrenRequest;

class PesantrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pesantren = Pesantren::all();
      //$prov = Provinsi::all();
      return view('pesantren.pesantren', compact('pesantren'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $kabupaten = Kabupaten::lists('nama_kabupaten','id_kabupaten');

      $pengasuh = Pengasuh::lists('nama_pengasuh','id_pengasuh');

      return view('pesantren.create',compact('kabupaten','pengasuh'));
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

      $pengasuh = Pengasuh::lists('nama_pengasuh','id_pengasuh');

      return view('pesantren.edit',compact('kabupaten','pengasuh','pesantren'));
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