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
            $table->string('NSPP',45);
            $table->string('nama_pesantren',45);
            $table->integer('jumlah_santri');
            $table->integer('kabupaten_id_kabupaten')->unsigned();
            $table->index('kabupaten_id_kabupaten','fk_pesantren_kabupaten_idx');
            $table->foreign('kabupaten_id_kabupaten')->references('id_kabupaten')->on('kabupaten');
            $table->integer('pengasuh_id_pengasuh')->unsigned();
            $table->index('pengasuh_id_pengasuh','fk_pesantren_pengasuh1_idx');
            $table->foreign('pengasuh_id_pengasuh')->references('id_pengasuh')->on('pengasuh');
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
        Schema::drop('pesantren');
    }
}
