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

        $faker = Faker\Factory::create('id_ID');

        for($i=0; $i<30; $i++){
            DB::table('provinsi')->insert([
                'nama_provinsi' => $faker->state, 

            ]);
        }
    }
}
