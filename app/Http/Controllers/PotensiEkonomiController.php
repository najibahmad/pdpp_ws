<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Potensi_ekonomi;
use App\Http\Requests\PotensiEkonomiRequest;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;

class PotensiEkonomiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ekonomi = Potensi_ekonomi::all();
      $counter = 0;
      return view('potensiekonomi.ekonomi', compact('ekonomi', 'counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('potensiekonomi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PotensiEkonomiRequest $request)
    {
        Potensi_ekonomi::create($request->all());

        \Session::flash('pesan','Potensi Ekonomi baru telah berhasil dimasukan!');

        return redirect('admin/potensiekonomi');
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
        $ekonomi = Potensi_ekonomi::findOrFail($id);

        return view('potensiekonomi.edit', compact('ekonomi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PotensiEkonomiRequest $request, $id)
    {
        //Find or Fail to get ID
        $ekonomi = Potensi_ekonomi::findOrFail($id);

        //Save record to the database
        $ekonomi->update($request->all());

        \Session::flash('pesan','Potensi Ekonomi telah berhasil diperbaharui!');
        //Return to universities controller
        return redirect('admin/potensiekonomi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Potensi_ekonomi::destroy($id);

        return redirect('admin/potensiekonomi');
    }


    public function exportPDF()
    {
      $eko = Potensi_ekonomi::all();
      $row = 1;
      $pdf = PDF::loadview('pdf.potensi', compact('row','eko'))->setPaper('A4');
      return $pdf->download('Data Potensi Ekonomi Pesantren.pdf');

    }

    public function exportEXL()
    {
      $eko = Potensi_ekonomi::all();
      // dd($prov);

      Excel::create('Data Potensi Ekonomi Pesantren', function($excel) use ($eko) {
            // Set property
            $excel->setTitle('Data Potensi Ekonomi Pesantren')
            ->setCreator('Administrator');
            $excel->sheet('Data Potensi Ekonomi Pesantren', function($sheet) use ($eko) {
                $row = 1;
                $sheet->row($row,['No','Nama Potensi Ekonomi']);
                foreach ($eko as $ekonomi) {
                      $sheet->row(++$row,[
                              $ekonomi->id_potensi_ekonomi,
                              $ekonomi->nama_potensi_ekonomi
                      ]);
                }
             });
      })->export('xls');
    }
}
