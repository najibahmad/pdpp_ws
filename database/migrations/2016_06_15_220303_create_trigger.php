<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::unprepared('
        // CREATE TRIGGER pesantren_AFTER_INSERT AFTER INSERT ON `pesantren`
        // FOR EACH ROW BEGIN
        //     UPDATE kabupaten
        //     INNER JOIN pesantren
        //     ON pesantren.kabupaten_id_kabupaten = kabupaten.provinsi_id_provinsi
        //     INNER JOIN provinsi
        //     ON provinsi.id_provinsi = kabupaten.provinsi_id_provinsi
        //     SET kabupaten.jumlah_pesantren_kabupaten = kabupaten.jumlah_pesantren_kabupaten + 1;

        //     UPDATE provinsi
        //     INNER JOIN pesantren
        //     ON pesantren.kabupaten_id_kabupaten = kabupaten.provinsi_id_provinsi
        //     INNER JOIN provinsi
        //     ON provinsi.id_provinsi = kabupaten.provinsi_id_provinsi
        //     SET provinsi.jumlah_pesantren_provinsi = provinsi.jumlah_pesantren_provinsi + 1;
        // END');
    }

    /**
     * Reverse the migrations.
     *
    //  * @return void
    //  */
    // public function down('DROP TRIGGER `pesantren_AFTER_INSERT`')
    // {
    //     //
    // }
}
