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
        	['id_potensi_ekonomi'=>0,'nama_potensi_ekonomi'=>'Tidak Ada'],
        	['id_potensi_ekonomi'=>1,'nama_potensi_ekonomi'=>'Koperasi/Baitul Mal'],
        	['id_potensi_ekonomi'=>2,'nama_potensi_ekonomi'=>'Pertanian/Agribisnis'],
        	['id_potensi_ekonomi'=>3,'nama_potensi_ekonomi'=>'Perternakan'],
        	['id_potensi_ekonomi'=>4,'nama_potensi_ekonomi'=>'Industri Kecil'],
        	['id_potensi_ekonomi'=>5,'nama_potensi_ekonomi'=>'Penerbitan/percetakan'],
        	['id_potensi_ekonomi'=>6,'nama_potensi_ekonomi'=>'Perdagangan'],
        	['id_potensi_ekonomi'=>7,'nama_potensi_ekonomi'=>'Perikanan/kelautan'],
        	['id_potensi_ekonomi'=>8,'nama_potensi_ekonomi'=>'Perbengkelan'],
        	['id_potensi_ekonomi'=>9,'nama_potensi_ekonomi'=>'Warnet/rental komputer'],
        	['id_potensi_ekonomi'=>10,'nama_potensi_ekonomi'=>'lain-lain'],
        ];

        DB::table('Potensi_ekonomi')->insert($data);
    }

}
