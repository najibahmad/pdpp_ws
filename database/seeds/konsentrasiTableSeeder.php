<?php

use Illuminate\Database\Seeder;

class konsentrasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          

        $data = 
        [
            ['id_konsentrasi'=>0,'nama_konsentrasi'=>'Tidak Ada'],
            ['id_konsentrasi'=>1,'nama_konsentrasi'=>'Aqidah/Tauhid'],
            ['id_konsentrasi'=>2,'nama_konsentrasi'=>'Fiqih/Ushul Fiqih'],
            ['id_konsentrasi'=>3,'nama_konsentrasi'=>'Tasawuf'],
            ['id_konsentrasi'=>4,'nama_konsentrasi'=>'Tafsir'],
            ['id_konsentrasi'=>6,'nama_konsentrasi'=>'Tahfidzul Quran'],
            ['id_konsentrasi'=>7,'nama_konsentrasi'=>'Ilmu Falaq/Hisab'],
            ['id_konsentrasi'=>8,'nama_konsentrasi'=>'Nahwu/Sharaf'],
            ['id_konsentrasi'=>9,'nama_konsentrasi'=>'Pendidikan Kader Ulama/Ustadz'],
            ['id_konsentrasi'=>10,'nama_konsentrasi'=>'Bahasa Arab'],
            ['id_konsentrasi'=>11,'nama_konsentrasi'=>'Lainnya'],

        ];

        DB::table('konsentrasi')->insert($data);

    	
    }
}
