<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PesantrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //remove any existing data in pesantren table

        // DB::table('pesantren')->truncate();

        $faker = Faker\Factory::create('id_ID');

        for($i=0; $i<30; $i++){
            $kabupatenRandom = DB::table('kabupaten')->first();
            DB::table('pesantren')->insert([
                'NSPP' => $faker->randomNumber(5),
                'nama_pesantren'=> $faker->company,
                'alamat_pesantren' => $faker->address,
                'kecamatan_pesantren'  => $faker->address,
                'kabupaten_id_kabupaten' => $faker->randomDigit,
                'no_telepon' => $faker->phoneNumber,
                'website' =>  $faker->domainName,
                'nama_pengasuh' =>  $faker->firstName,
                'jumlah_santri'  => $faker->randomNumber(4),
                'jumlah_santri_mukim'  => $faker->randomNumber(4),
                'kabupaten_id_kabupaten' => $kabupatenRandom->id_kabupaten
            ]);
        }
    }
}
