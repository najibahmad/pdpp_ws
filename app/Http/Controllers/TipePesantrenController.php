<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tipe_pesantren;
use App\Http\Requests\TipePesantrenRequest;
use DB;

class TipePesantrenController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipe = Tipe_pesantren::all();
      $counter = 0;
      return view('tipepesantren.tipe', compact('tipe', 'counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipepesantren.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipePesantrenRequest $request)
    {
        Tipe_pesantren::create($request->all());

        \Session::flash('pesan','Tipe Pesantren baru telah berhasil disimpan!');

        return redirect('admin/tipepesantren');
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
        $tipe = Tipe_pesantren::findOrFail($id);

        return view('tipepesantren.edit', compact('tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipePesantrenRequest $request, $id)
    {
        //Find or Fail to get ID
        $tipe = Tipe_pesantren::findOrFail($id);

        //Save record to the database
        $tipe->update($request->all());

        \Session::flash('pesan','Tipe Pesantren telah berhasil diedit!');
        //Return to universities controller
        return redirect('admin/tipepesantren');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipe_pesantren::destroy($id);

        return redirect('admin/tipepesantren');
    }
}
