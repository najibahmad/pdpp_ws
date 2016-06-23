<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Hash;

class ChangePasswordsController extends Controller {

  public function __construct()
  {
    $this->middleware('admin');
  }

	public function edit() {
        return view('admin/changepassword');
  }

  public function update(Request $request){
    $validator = \Validator::make($request->all(),array(
			'Password_Lama'	=> 'required',
      'Password_Baru' 		=> 'required|min:6',
			'Konfirmasi_Password'=> 'required|same:Password_Baru'
		));

  	if($validator->fails()) {
  		return redirect()->back()->withErrors($validator);
  	} else {
      // Grab the current user
  		$user = User::find(Auth::user()->id_pengguna);

  		// Get passwords from the user's input
  		$old_password 	= $request->Password_Lama;
  		$password 		= $request->Password_Baru;

  		// test input password against the existing one
  		if(Hash::check($old_password, $user->getAuthPassword())){
  			$user->password = Hash::make($password);

  			// save the new password
  			if($user->save()) {
  				return redirect('/admin/pengguna')
  						->with('pesan', 'Password anda berhasil diganti.');
  			}
  		} else {
  			return redirect()->back()
  				->with('pesan', 'Password saat ini tidak sesuai.');
  		}
  	}

  }

  public function edit2($id_pengguna) {
    $pengguna = User::findOrFail($id_pengguna);
    return view('admin.changepassworduser', compact('pengguna'));
  }

  public function update2(Request $request, $id_pengguna){
    $validator = \Validator::make($request->all(),array(
      'Password_Baru' 		=> 'required|min:6',
			'Konfirmasi_Password'=> 'required|same:Password_Baru'
		));

  	if($validator->fails()) {
  		return redirect()->back()->withErrors($validator);
  	} else {
        $user = User::findOrFail($id_pengguna);

        $password = $request->Password_Baru;

  			$user->password = Hash::make($password);

  			// save the new password
  			if($user->save()) {
  				return redirect('/admin/pengguna')
  						->with('pesan', 'Password pengguna berhasil direset.');

  		} else {
  			return redirect()->back()
  				->with('pesan', 'Password saat ini tidak sesuai.');
  		}
  	}

  }
}
