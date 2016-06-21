<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Santri;
class santriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         $faker = Faker\Factory::create('id_ID');
         for($i=0; $i<30; $i++)
         {
            // $santriRandom = santri::all()->random(1);

            DB::table('santri')->insert([
                'jumlah_santri_mukim_pria' => $faker ->randomNumber(3),
                'jumlah_santri_mukim_wanita' => $faker ->randomNumber(3),
                'jumlah_santri_tidak_mukim_pria'=>$faker ->randomNumber(3),
                'jumlah_santri_tidak_mukim_wanita'=>$faker ->randomNumber(3),        
                ]);
        }

    }
}
