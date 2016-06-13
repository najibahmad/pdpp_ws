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
    protected $token_asli = "10adcba89b4a410c889b66fa3a87b6a0";

    public function listProvinsi($token)
    {
      if($this->cek_token($token))
      {
        $provinsi = Provinsi::all();
        //$pesantren = Pesantren::all('id_pesantren','nama_pesantren');
        //return response()->json(array("data" => $provinsi, "pesantren" => $pesantren));
        return response()->json(array("data" => $provinsi));
      }
      return response()->json(array("data" => "Anda tidak memiliki akses."));
    }

    public function listKabupaten($token)
    {
      if($this->cek_token($token))
      {
        $kabupaten = Kabupaten::all('id_kabupaten', 'nama_kabupaten');
        return response()->json(array("data" => $kabupaten));
      }
      return response()->json(array("data" => "Anda tidak memiliki akses."));
    }

    public function listKabupatenByIdProvinsi($token, $id_provinsi)
    {
      if($this->cek_token($token))
      {
        $kabupaten = DB::table('kabupaten')
                    ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                    ->where('kabupaten.provinsi_id_provinsi', '=', $id_provinsi)
                    //->select('id_kabupaten','nama_kabupaten','nama_provinsi')
                    ->get();

        return response()->json(array("data" => $kabupaten));
      }
      return response()->json(array("data" => "Anda tidak memiliki akses."));
    }

    public function listPesantrenByIdKabupaten($token, $id_kabupaten)
    {
      if($this->cek_token($token))
      {
        $kabupaten = DB::table('pesantren')
                    ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                    ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                    ->where('pesantren.kabupaten_id_kabupaten', '=', $id_kabupaten)
                    //->select('id_pesantren','nama_pesantren','nama_kabupaten','nama_provinsi')
                    ->get();

        return response()->json(array("data" => $kabupaten));
      }
      return response()->json(array("data" => "Anda tidak memiliki akses."));
    }

    public function detailPesantren($token, $id_pesantren)
    {
      if($this->cek_token($token))
      {
        $pesantren = DB::table('pesantren')
                    ->join('kabupaten','pesantren.kabupaten_id_kabupaten', '=', 'kabupaten.id_kabupaten')
                    ->join('provinsi','kabupaten.provinsi_id_provinsi', '=', 'provinsi.id_provinsi')
                    ->where('pesantren.id_pesantren', '=', $id_pesantren)
                    //->select('id_pesantren','nama_pesantren','nama_kabupaten','nama_provinsi')
                    ->get();

        return response()->json(array("data" => $pesantren));
      }
      return response()->json(array("data" => "Anda tidak memiliki akses."));
    }

    public function pesantrenSearchByText($token, $text)
    {
      if($this->cek_token($token))
      {
        $pesantren = Pesantren::search($text)->get();

        return response()->json(array("data" => $pesantren));
      }
      return response()->json(array("data" => "Anda tidak memiliki akses."));
    }

    public function pesantrenSearchByTextAndProvinsi($token, $text,$id_provinsi)
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
      if($this->cek_token($token))
      {
        $pesantren = Pesantren::where('id_provinsi', $id_provinsi)
                    ->search($text)
                    ->get();

        return response()->json(array("data" => $pesantren));
      }
      return response()->json(array("data" => "Anda tidak memiliki akses."));
    }

    public function pesantrenSearchByTextAndKabupaten($token, $text,$id_kabupaten)
    {
      if($this->cek_token($token))
      {
        $pesantren = Pesantren::where('kabupaten_id_kabupaten', $id_kabupaten)
                    ->search($text)
                    ->get();

        return response()->json(array("data" => $pesantren));
      }
      return response()->json(array("data" => "Anda tidak memiliki akses."));
    }


    private function cek_token($token)
    {
      return ($this->token_asli == $token);
    }
}
