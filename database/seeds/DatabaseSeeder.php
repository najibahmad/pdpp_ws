<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // $this->call(ProvinsiTableSeeder::class);
        // $this->call(KabupatenTableSeeder::class);
        // $this->call(PesantrenTableSeeder::class);
        $this->call(potensi_ekonomiTableSeeder::class);
        $this->call(konsentrasiTableSeeder::class);
        $this->call(tipe_pesantrenTableSeeder::class);
        // $this->call(tenaga_pengajarTableSeeder::class);
        // $this->call(santriTableSeeder::class);
    }
}
