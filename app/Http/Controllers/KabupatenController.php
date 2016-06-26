<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Provinsi;
use App\Kabupaten;
use App\Http\Requests\KabupatenRequest;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;

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

      return view('kabupaten.create',compact('prov'));
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

      \Session::flash('pesan','Kabupaten telah berhasil diperbaharui!');

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


    public function exportPDF()
    {
      $kab = DB::table('kabupaten')
              ->select('id_kabupaten', 'nama_kabupaten', 'nama_provinsi')
              ->Join('provinsi', 'kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
              ->groupBy('kabupaten.id_kabupaten')
              ->get();

      $row = 1;
      $pdf = PDF::loadview('pdf.kabupaten', compact('row','kab'))->setPaper('A4');
      return $pdf->download('Data Seluruh Kabupaten.pdf');

    }

    public function exportEXL()
    {
      $kab = DB::table('kabupaten')
              ->select('id_kabupaten', 'nama_kabupaten', 'nama_provinsi')
              ->Join('provinsi', 'kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
              ->groupBy('kabupaten.id_kabupaten')
              ->get();

      Excel::create('Data Seluruh Kabupaten', function($excel) use ($kab) {
            // Set property
            $excel->setTitle('Data Seluruh Kabupaten')
            ->setCreator('Administrator');
            $excel->sheet('Data Seluruh Kabupaten', function($sheet) use ($kab) {
                $row = 1;
                $sheet->row($row,['No','Nama Kabupaten','Nama Provinsi']);
                foreach ($kab as $kabupaten) {
                      $sheet->row(++$row,[
                              $kabupaten->id_kabupaten,
                              $kabupaten->nama_kabupaten,
                              $kabupaten->nama_provinsi
                      ]);
                }
             });
      })->export('xls');
    }
}
