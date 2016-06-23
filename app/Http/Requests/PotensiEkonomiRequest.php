<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PotensiEkonomiRequest extends Request
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
          'nama_potensi_ekonomi' => 'required'
        ];
    }

    public function messages()
  	{
  		return [
  			'nama_potensi_ekonomi.required' => 'Nama Potensi Ekonomi tidak boleh kosong'
  		];
  	}
}
