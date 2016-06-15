<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Provinsi;
use App\Kabupaten;
use App\Http\Requests\KabupatenRequest;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kab = Kabupaten::all();
      //$prov = Provinsi::all();
      return view('kabupaten.kab', compact('kab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $prov = Provinsi::lists('nama_provinsi','id_provinsi');

      return view('kabupaten.create',compact('prov')); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KabupatenRequest $request)
    {
        Kabupaten::create($request->all());

        \Session::flash('pesan','Kabupaten baru telah berhasil dimasukan!');

        return redirect('admin/kabupaten');
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
      $prov = Provinsi::lists('nama_provinsi','id_provinsi');
      $kab = Kabupaten::findOrFail($id);

      return view('kabupaten.edit', compact('kab','prov'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KabupatenRequest $request, $id)
    {
      //Find or Fail to get ID
      $kab = Kabupaten::findOrFail($id);

      //Save record to the database
      $kab->update($request->all());

      //Return to universities controller
      return redirect('admin/kabupaten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Kabupaten::destroy($id);

      return redirect('admin/kabupaten');
    }
}
