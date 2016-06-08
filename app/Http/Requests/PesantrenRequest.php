<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PesantrenRequest extends Request
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
             'NSPP' => 'required',
             'nama_pesantren' => 'required',
             'jumlah_santri' => 'not_in:100',
             'kabupaten_id_kabupaten' => 'not_in:0',
             'pengasuh_id_pengasuh' => 'not_in:0',
         ];
     }

     public function messages()
    {
      return [
        'NSPP.required' => 'Nomor Statistik Pondok Pesantren tidak boleh kosong',
        'nama_pesantren.required' => 'Nama Pesantren tidak boleh kosong',
        'jumlah_santri.required' => 'Jumlah santri tidak boleh kosong',
        'kabupaten_id_kabupaten.not_in' => 'Kabupaten tidak boleh kosong',
        'pengasuh_id_pengasuh.not_in' => 'Nama Pengasuh Pondok tidak boleh kosong'
      ];
    }
}
