<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pesantren;

class PesantrenSearchController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('search')){
            $pesantrens = Pesantren::search($request->input('search'))->toArray();
        }

        return view('PesantrenSearch', compact('pesantrens'));
    }

}
