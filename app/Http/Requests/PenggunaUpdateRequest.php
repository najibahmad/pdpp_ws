<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PenggunaUpdateRequest extends Request {

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
			'email_pengguna' => 'required|email'
		];
	}

	public function messages()
	{
		return [
			'nama_pengguna.required' => 'Username harus diisi',
			'email_pengguna.required' => 'Username harus diisi',
			'email_pengguna.email' => 'Gunakan E-mail yang valid'
		];
	}

}
