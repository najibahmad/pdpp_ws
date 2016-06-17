<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

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

        $pesantren = DB::table('pesantren')->select('NSPP','nama_pesantren','nama_pengasuh')->get();

        // dd($pesantren);
        $counter=1;
        return view('public.pesantrens',compact('pesantren','counter'));
    }   

    public function exportPesantren()
    {

        $pesantren = DB::table('pesantren')
                    ->Join('kabupaten', 'pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                    ->where('kabupaten.id_kabupaten', $id_kabupaten)
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
