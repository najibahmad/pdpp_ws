<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Provinsi;
use App\Kabupaten;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.index');
    }

    public function listsearching()
    {

     $prov = Provinsi::lists('nama_provinsi','id_provinsi');

     $kabupaten = Kabupaten::lists('nama_kabupaten','id_kabupaten');
   
     return view('guest.listsearching',compact('prov','kabupaten'));
    // return view('guest.listsearching'); 
    
    }

   
}
