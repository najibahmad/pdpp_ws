<?php

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //remove any existing data in provinsi table
        // DB::table('provinsi')->delete();

       //remove any existing data in provinsi table
        DB::table('provinsi')->truncate();

        $data =
        [
            ['id_provinsi'=>11,'nama_provinsi'=>'Aceh','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>12,'nama_provinsi'=>'Sumatera Utara','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>13,'nama_provinsi'=>'Sumatera Barat','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>14,'nama_provinsi'=>'Riau','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>15,'nama_provinsi'=>'Jambi','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>16,'nama_provinsi'=>'Sumatera Selatan','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>17,'nama_provinsi'=>'Bengkulu','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>18,'nama_provinsi'=>'Lampung','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>19,'nama_provinsi'=>'Bangka Belitung','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>21,'nama_provinsi'=>'Kepulauan Riau','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>31,'nama_provinsi'=>'DKI Jakarta','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>32,'nama_provinsi'=>'Jawa Barat','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>33,'nama_provinsi'=>'Jawa Tengah','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>34,'nama_provinsi'=>'DI Yogyakarta','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>35,'nama_provinsi'=>'Jawa Timur','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>36,'nama_provinsi'=>'Banten','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>51,'nama_provinsi'=>'Bali','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>52,'nama_provinsi'=>'Nusa Tenggara Barat','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>53,'nama_provinsi'=>'Nusa Tenggara Timur','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>61,'nama_provinsi'=>'Kalimantan Barat','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>62,'nama_provinsi'=>'Kalimantan Tengah','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>63,'nama_provinsi'=>'Kalimantan Selatan','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>64,'nama_provinsi'=>'Kalimantan Timur','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>65,'nama_provinsi'=>'Kalimantan Utara','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>71,'nama_provinsi'=>'Sulawesi Utara','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>72,'nama_provinsi'=>'Sulawesi Tengah','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>73,'nama_provinsi'=>'Sulawesi Selatan','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>74,'nama_provinsi'=>'Sulawesi Tenggara','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>75,'nama_provinsi'=>'Gorontalo','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>76,'nama_provinsi'=>'Sulawesi Barat','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>81,'nama_provinsi'=>'Maluku','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>82,'nama_provinsi'=>'Maluku Utara','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>91,'nama_provinsi'=>'Papua','jumlah_pesantren_provinsi'=> '10'],
            ['id_provinsi'=>92,'nama_provinsi'=>'Papua Barat','jumlah_pesantren_provinsi'=> '10'],
        ];
        DB::table('provinsi')->insert($data);

    }
}
