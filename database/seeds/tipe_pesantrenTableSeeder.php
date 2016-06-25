<?php

use Illuminate\Database\Seeder;

class tipe_pesantrenTableSeeder extends Seeder
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
            ['id_tipe_pesantren'=>1,'nama_tipe_pesantren'=>'Hanya menyelenggarakan Kajian Kitab'],
            ['id_tipe_pesantren'=>2,'nama_tipe_pesantren'=>'Menyelenggarakan Kajian Kitab & Layanan Pendidikan lainnya']
            
        ];

        DB::table('tipe_pesantren')->insert($data);

    }
}
