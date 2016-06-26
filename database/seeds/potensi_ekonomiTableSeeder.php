<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Potensi_ekonomi;

class potensi_ekonomiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data =
        [
        	['id_potensi_ekonomi'=>1,'nama_potensi_ekonomi'=>'Tidak Ada'],
        	['id_potensi_ekonomi'=>2,'nama_potensi_ekonomi'=>'Koperasi/Baitul Mal wat Tamwil'],
        	['id_potensi_ekonomi'=>3,'nama_potensi_ekonomi'=>'Pertanian/Agribisnis/Perkebunan'],
        	['id_potensi_ekonomi'=>4,'nama_potensi_ekonomi'=>'Perternakan'],
        	['id_potensi_ekonomi'=>5,'nama_potensi_ekonomi'=>'Industri Kecil (Home Industri)'],
        	['id_potensi_ekonomi'=>6,'nama_potensi_ekonomi'=>'Penerbitan/Percetakan/Sablon'],
        	['id_potensi_ekonomi'=>7,'nama_potensi_ekonomi'=>'Perdagangan (Toko/Mini Market)'],
        	['id_potensi_ekonomi'=>8,'nama_potensi_ekonomi'=>'Perikanan/Kelautan/Maritim'],
        	['id_potensi_ekonomi'=>9,'nama_potensi_ekonomi'=>'Perbengkelan (Elektronik, Otomotif)'],
        	['id_potensi_ekonomi'=>10,'nama_potensi_ekonomi'=>'Wartel/Warnet/Rental Komputer'],
        	['id_potensi_ekonomi'=>11,'nama_potensi_ekonomi'=>'Lainnya'],
        ];

        DB::table('potensi_ekonomi')->insert($data);
    }

}
