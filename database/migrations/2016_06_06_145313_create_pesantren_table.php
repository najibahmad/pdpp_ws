<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesantrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesantren', function (Blueprint $table) {
            $table->increments('id_pesantren')->unique();
            $table->string('NSPP',45)->unique();
            $table->string('nama_pesantren',45);
            $table->string('alamat_pesantren');
            $table->string('kecamatan_pesantren');
            $table->integer('kabupaten_id_kabupaten')->unsigned();
            $table->string('no_telepon',20);
            $table->string('website',50);
            $table->string('nama_pengasuh',50);
            $table->integer('jumlah_santri');
            $table->integer('jumlah_santri_mukim');
            // $table->index('kabupaten_id_kabupaten','fk_pesantren_kabupaten_idx');
            // $table->foreign('kabupaten_id_kabupaten')->references('id_kabupaten')->on('kabupaten');
            // $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pesantren');
    }
}
