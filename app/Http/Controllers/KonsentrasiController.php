<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Konsentrasi;
use App\Http\Requests\KonsentrasiRequest;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;

class KonsentrasiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kon = Konsentrasi::all();
      $counter = 0;
      return view('konsentrasi.kon', compact('kon', 'counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsentrasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KonsentrasiRequest $request)
    {
        Konsentrasi::create($request->all());

        \Session::flash('pesan','Konsentrasi baru telah berhasil dimasukan!');

        return redirect('admin/konsentrasi');
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
        $kon = Konsentrasi::findOrFail($id);

        return view('konsentrasi.edit', compact('kon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KonsentrasiRequest $request, $id)
    {
        //Find or Fail to get ID
        $kon = Konsentrasi::findOrFail($id);

        //Save record to the database
        $kon->update($request->all());

        \Session::flash('pesan','Konsentrasi telah berhasil diperbaharui!');
        //Return to universities controller
        return redirect('admin/konsentrasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Konsentrasi::destroy($id);

        return redirect('admin/konsentrasi');
    }


    public function exportPDF()
    {
      $kon = Konsentrasi::all();
      $row = 1;
      $pdf = PDF::loadview('pdf.konsentrasi', compact('row','kon'))->setPaper('A4');
      return $pdf->download('Data Konsentrasi Pesantren.pdf');

    }

    public function exportEXL()
    {
      $kon = Konsentrasi::all();
      // dd($prov);

      Excel::create('Data Konsentrasi Pesantren', function($excel) use ($kon) {
            // Set property
            $excel->setTitle('Data Konsentrasi Pesantren')
            ->setCreator('Administrator');
            $excel->sheet('Data Konsentrasi Pesantren', function($sheet) use ($kon) {
                $row = 1;
                $sheet->row($row,['No','Nama Konsentasi']);
                foreach ($kon as $konsentrasi) {
                      $sheet->row(++$row,[
                              $konsentrasi->id_konsentrasi,
                              $konsentrasi->nama_konsentrasi
                      ]);
                }
             });
      })->export('xls');
    }
}
