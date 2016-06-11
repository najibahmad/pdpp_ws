<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\PenggunaRequest;
use App\Http\Requests\PenggunaUpdateRequest;
use Auth;

// use Illuminate\Http\Request;
use Request;

class PenggunaController extends Controller {


	public function __construct()
	{
		//$this->middleware('auth');
		//$this->middleware('admin');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$users = User::all();
		$users = User::whereRaw('hak_akses = 255 OR hak_akses = 100 OR hak_akses = 200')->get();

		$counter = 0;

		return view('pengguna.pengguna', compact('users','counter'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pengguna.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PenggunaRequest $request)
	{
		//$input = Request::all();
		//$input['role'] =1;

		//User::create($input);

		// return $input;

    //dd($request->all());
		User::create([
			'nama_pengguna' => $request['nama_pengguna'],
			'email_pengguna' => $request['email_pengguna'],
			'password' => bcrypt($request['password']),
			'hak_akses' => $request['hak_akses'],
		]);

		//\Session::flash('flash_text','Pengguna berhasil dibuat!');
		return redirect('admin/pengguna');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('pengguna.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PenggunaUpdateRequest $request)
	{
		$user = User::findOrFail($id);
		$user->update($request->all());
		return redirect('admin/pengguna');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return redirect('admin/users');
	}

}
