<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pesantren;
use App\Provinsi;
use App\Kabupaten;
use DB;
use Input;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;
use Auth;

class PublicController extends Controller
{
    // search 
    public function index()
    {
        return view('public.index');
    }


    // list pesantren/ search result
    public function listPesantrenAll()
    {

         // dd($pesantren);
       
        $pesantren = DB::table('pesantren')->get();
        $counter = 0;

        return view('public.pesantrens',compact('pesantren','counter'));
    }   


    public function listPesantrenAll2()
    {

    }


    public function exportPesantrenPDF()
    {
        $pesantrens = DB::table('pesantren')
        ->get();

        $row = 1;
        $pdf = PDF::loadview('pdf.reportpesantren',compact('pesantrens','row'))->setPaper('legal','landscape');
        
        return $pdf->download('Data Report Pondok Pesantren.pdf');



    }


    public function exportPesantrenExcel()
    {
     
        $pesantren = DB::table('pesantren')
       
                    ->get();
        // dd($pesantren);

        Excel::create('Data Pesantren',function($excel) use($pesantren){ 
            //Set Property

            $excel->setTitle('Data Pesantren Indonesia');

            $excel->sheet('Data Pesantren', function($sheet) use ($pesantren) {
                $row = 1;
                $sheet->row($row,[
                    'ID Pesantren',
                    'NSPP',
                    'Nama Pesantren',
                    'Nama Pengasuh',
                    'Jumlah Santri',
                    'Jumlah Santri Mukim',
                    'Alamat',
                    'Kecamatan',
                    'Kabupaten',
                    'No Telpon',
                    'Website'
                    ]);
                foreach ($pesantren as $_pesantren) {
                    $sheet->row(++$row,[
                        $_pesantren->id_pesantren,
                        $_pesantren->NSPP,
                        $_pesantren->nama_pesantren,
                        $_pesantren->nama_pengasuh,
                        $_pesantren->jumlah_santri,
                        $_pesantren->jumlah_santri_mukim,
                        $_pesantren->alamat_pesantren,
                        $_pesantren->kecamatan_pesantren,
                        $_pesantren->kabupaten_id_kabupaten,
                        $_pesantren->no_telepon,
                        $_pesantren->website
                        ]);
                }
            });      
        })->export('xls');
    }

}
