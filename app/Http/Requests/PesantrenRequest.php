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
             'tipe_pesantren_id' => 'not_in:0',
             'potensi_ekonomi_id' => 'not_in:0',
             'konsentrasi_id' => 'not_in:0'
         ];
     }

     public function messages()
    {
      return [
        'NSPP.required' => 'Nomor Statistik Pondok Pesantren tidak boleh kosong',
        'nama_pesantren.required' => 'Nama Pesantren tidak boleh kosong',
        'jumlah_santri.required' => 'Jumlah santri tidak boleh kosong',
        'kabupaten_id_kabupaten.not_in' => 'Kabupaten tidak boleh kosong',
        'tipe_pesantren_id.not_in' => 'Tipe Pesantren tidak boleh kosong',
        'potensi_ekonomi_id.not_in' => 'Potensi Ekonomi tidak boleh kosong',
        'konsentrasi_id.not_in' => 'Jenis Konsentrasi tidak boleh kosong'
      ];
    }
}
