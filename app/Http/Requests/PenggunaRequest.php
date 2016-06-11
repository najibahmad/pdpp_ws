<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PenggunaRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nama_pengguna' => 'required|max:30|alpha',
			'email_pengguna' => 'required|email|unique:pengguna',
			'password' => 'required|confirmed|min:8'
		];
	}

	public function messages()
	{
		return [
			'nama_pengguna.required' => 'Username harus diisi',
			'email_pengguna.required' => 'Username harus diisi',
			'email_pengguna.email' => 'Gunakan E-mail yang valid',
			'email_pengguna.unique' => 'Email ini sudah digunakan',
			'password.required' => 'Password tidak boleh kosong',
			'password.confirmed' => 'Password yang anda masukan tidak sama',
			'password.min' => 'Password minimal depalan (8) huruf',
		];
	}

}
