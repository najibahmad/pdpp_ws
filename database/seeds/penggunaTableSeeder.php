<?php

use Illuminate\Database\Seeder;

class penggunaTableSeeder extends Seeder
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
            ['id_pengguna'=>1,'nama_pengguna'=>'tes','email_pengguna' => 'tes@yahoo.com',
              'password' =>'$2y$10$PE1EgnK/OFzQvJf4uTLpN.jVwwsPTq4Mzfc.56MdeftNG4/91LS6S','hak_akses'=>255],
            ['id_pengguna'=>2,'nama_pengguna'=>'pdpp','email_pengguna' => 'pdpp@yahoo.com',
              'password' =>'$2y$10$wCzABhzklvKJK/0zWd0lSe7VBnsJi/LUHNAKgvjuZCahZZ.BrFLT.','hak_akses'=>255]

        ];

        DB::table('pengguna')->insert($data);

    }
}
