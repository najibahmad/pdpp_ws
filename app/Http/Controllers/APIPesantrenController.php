<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pesantren;
use App\Provinsi;
use App\Kabupaten;

class APIPesantrenController extends Controller
{
    public function pesantrenList()
    {
      $pesantren = Pesantren::all();
      //$prov = Provinsi::all();
      return response()->json(array("data" => $pesantren));
    }

    public function pesantrenByNspp($nspp)
    {
      $pesantren = Pesantren::where('NSPP', '=', $nspp)->firstOrFail();
    //  dd($pesantren);
      //$prov = Provinsi::all();
      // @if (empty($pesantren))
      // {
      //   return response()->json("{}", 404);
      // }
      // @endif

      return response()->json(array("data" => $pesantren));
    }

    public function pesantrenByName($nama)
    {
      $pesantren = Pesantren::where('nama_pesantren', '=', $nama)->firstOrFail();
    //  dd($pesantren);
      //$prov = Provinsi::all();
      // @if (empty($pesantren))
      // {
      //   return response()->json("{}", 404);
      // }
      // @endif

      return response()->json(array("data" => $pesantren));
    }

    public function listProvinsi()
    {
      $provinsi = Provinsi::all();

      $pesantren = Pesantren::all('id_pesantren','nama_pesantren');

      return response()->json(array("data" => $provinsi, "pesantren" => $pesantren));
    }

    public function listKabupaten($id_provinsi)
    {
      $kabupaten = Kabupaten::where('provinsi_id_provinsi', '=', $id_provinsi)->get();

      return response()->json(array("data" => $kabupaten));
    }
}
