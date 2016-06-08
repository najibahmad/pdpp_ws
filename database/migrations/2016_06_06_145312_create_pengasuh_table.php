<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengasuhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengasuh', function (Blueprint $table) {
            $table->increments('id_pengasuh')->unique();
            $table->string('NIK',45);
            $table->string('nama_pengasuh',45);
            $table->string('jabatan',45);
            $table->string('hp_pengasuh',45);
            $table->string('email_pengasuh',45);
            $table->string('facebook_pengasuh',45);
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
        Schema::drop('pengasuh');
    }
}
