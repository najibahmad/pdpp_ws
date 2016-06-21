<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsPesantrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesantren', function(Blueprint $table)
        {
            // longitude
            // latitude
            // tahun_berdiri
            // tipe_pesantren_id
            // potensi_ekonomi_id
            // konsentrasi_id
            // tenaga_pengajar_id
            // santri_id
            $table->string('longitude', 50)->after('website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
