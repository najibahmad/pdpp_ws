<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablesPesantrenTable extends Migration
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
            
            $table->string('latitude', 50)->after('longitude');
            $table->integer('tahun_berdiri')->after('latitude');
            $table->integer('tipe_pesantren_id')->after('tahun_berdiri');
            $table->integer('potensi_ekonomi_id')->after('tipe_pesantren_id');
            $table->integer('konsentrasi_id')->after('potensi_ekonomi_id');
            $table->integer('tenaga_pengajar_id')->after('jumlah_santri_mukim');
            $table->integer('santri_id')->after('tenaga_pengajar_id');

        });
    }

   
    public function down()
    {
        //
    }
}
