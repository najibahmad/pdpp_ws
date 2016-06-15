<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
// use App\Provinsi;
// use App\Kabupaten;

class GuestController extends Controller
{
  //   //
	 // public function index()
  //   {
  //   	// $prov = Provinsi::lists('nama_provinsi','id_provinsi');

  //   	//  $kabupaten = Kabupaten::lists('nama_kabupaten','id_kabupaten');


  //    //    return view('guest.index',compact('prov','kabupaten'));
  //       return view('guest.index');

  //   }

	public function index()
    {
        return view('guest');
    }

   
}
