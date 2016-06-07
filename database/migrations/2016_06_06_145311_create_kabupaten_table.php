<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->increments('id_kabupaten')->unique();
            $table->string('nama_kabupaten',45);
            $table->integer('provinsi_id_provinsi')->unsigned();
            $table->index('provinsi_id_provinsi','fk_kabupaten_provinsi1_idx');
            $table->foreign('provinsi_id_provinsi')->references('id_provinsi')->on('provinsi');
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kabupaten');
    }
}
