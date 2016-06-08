<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PengasuhRequest extends Request
{
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
             'NIK' => 'required',
             'nama_pengasuh' => 'required',
             'jabatan' => 'not_in:100',
             'hp_pengasuh' => 'required',
             'email_pengasuh' => 'required',
             'facebook_pengasuh' => 'required'
         ];
     }

     public function messages()
   	{
   		return [
   			'NIK.required' => 'Nomor KTP/NIK tidak boleh kosong',
        'nama_pengasuh.required' => 'Nama Pengasuh tidak boleh kosong',
        'jabatan.not_in' => 'Jabatan Pengasuh tidak boleh kosong',
        'hp_pengasuh.required' => 'Nomor Telepon tidak boleh kosong',
        'email_pengasuh.required' => 'Email Pengasuh tidak boleh kosong',
        'facebook_pengasuh.required' => 'Facebook Pengasuh tidak boleh kosong'
   		];
   	}
}
