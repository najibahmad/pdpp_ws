<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pesantren;
use App\Provinsi;
use App\Kabupaten;
use DB;

class APIPesantrenController extends Controller
{
    public function listProvinsi()
    {
      $provinsi = Provinsi::all();
      //$pesantren = Pesantren::all('id_pesantren','nama_pesantren');
      //return response()->json(array("data" => $provinsi, "pesantren" => $pesantren));
      return response()->json(array("data" => $provinsi));
    }

    public function listKabupaten()
    {
      $kabupaten = Kabupaten::all('id_kabupaten', 'nama_kabupaten');

      return response()->json(array("data" => $kabupaten));
    }

    public function listKabupatenByIdProvinsi($id_provinsi)
    {
      $kabupaten = DB::table('kabupaten')
                  ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                  ->where('kabupaten.provinsi_id_provinsi', '=', $id_provinsi)
                  //->select('id_kabupaten','nama_kabupaten','nama_provinsi')
                  ->get();

      return response()->json(array("data" => $kabupaten));
    }

    public function listPesantrenByIdKabupaten($id_kabupaten)
    {
      $kabupaten = DB::table('pesantren')
                  ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                  ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                  ->where('pesantren.kabupaten_id_kabupaten', '=', $id_kabupaten)
                  //->select('id_pesantren','nama_pesantren','nama_kabupaten','nama_provinsi')
                  ->get();

      return response()->json(array("data" => $kabupaten));
    }

    public function detailPesantren($id_pesantren)
    {
      $pesantren = DB::table('pesantren')
                  ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                  ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                  ->where('pesantren.id_pesantren', '=', $id_pesantren)
                  //->select('id_pesantren','nama_pesantren','nama_kabupaten','nama_provinsi')
                  ->get();

      //$pesantren = Pesantren::where('id_pesantren',$id_pesantren)->get();

      return response()->json(array("data" => $pesantren));
    }

    public function pesantrenSearchByText($text)
    {
      $pesantren = Pesantren::search($text)->get();

      return response()->json(array("data" => $pesantren));
    }

    public function pesantrenSearchByTextAndProvinsi($text,$id_provinsi)
    {
      // Search only active users
      // $pesantren = DB::table('pesantren')
      //             ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
      //             ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
      //             ->where('kabupaten.provinsi_id_provinsi', '=', $id_provinsi)
      //             ->search($text)
      //             //->select('id_pesantren','nama_pesantren','nama_kabupaten','nama_provinsi')
      //             ->get();
      //$id_provinsi = Kabupaten::where('id_kabupaten',$id_provinsi)->pluck('provinsi_id_provinsi');
      $pesantren = Pesantren::where('id_provinsi', $id_provinsi)
                  ->search($text)
                  ->get();

      return response()->json(array("data" => $pesantren));
    }

    public function pesantrenSearchByTextAndKabupaten($text,$id_kabupaten)
    {
      $pesantren = Pesantren::where('kabupaten_id_kabupaten', $id_kabupaten)
                  ->search($text)
                  ->get();

      return response()->json(array("data" => $pesantren));
    }
}
