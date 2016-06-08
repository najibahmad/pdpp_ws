<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengasuh;
use App\Http\Requests\PengasuhRequest;

class PengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pengasuh = Pengasuh::all();
      //$prov = Provinsi::all();
      return view('pengasuh.pengasuh', compact('pengasuh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = array('Pimpinan','Ketua Yayasan','Pendiri');

        return view('pengasuh.create',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengasuhRequest $request)
    {
      Pengasuh::create($request->all());

      \Session::flash('pesan','Pengasuh baru telah berhasil dimasukan!');

      return redirect('admin/pengasuh');
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
      $pengasuh = Pengasuh::findOrFail($id);

      $jabatan = array('Pimpinan','Ketua Yayasan','Pendiri');

      return view('pengasuh.edit', compact('pengasuh','jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengasuhRequest $request, $id)
    {
      //Find or Fail to get ID
      $pengasuh = Pengasuh::findOrFail($id);

      //Save record to the database
      $pengasuh->update($request->all());

      //Return to universities controller
      return redirect('admin/pengasuh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Pengasuh::destroy($id);

      return redirect('admin/pengasuh');
    }
}
