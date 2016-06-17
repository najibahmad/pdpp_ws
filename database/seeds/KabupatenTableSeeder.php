<?php

use Illuminate\Database\Seeder;

class KabupatenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('kabupaten')->delete();

        $faker = Faker\Factory::create('id_ID');

        foreach(range(1, 30) as $index){
            // $provinsiRandom = DB::table('provinsi')->first();
            $provinsiRandom = Provinsi::all()->random(1);

            DB::table('kabupaten')->insert([
                'nama_kabupaten' => $faker->city,
                'provinsi_id_provinsi' => $provinsiRandom->id_provinsi
            ]);
        }
    }
}
