<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenagaPengajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('tenaga_pengajar', function (Blueprint $table) {
            $table->increments('id_tenaga_pengajar')->unique();
            $table->integer('nonformal_pria');
            $table->integer('nonformal_wanita');
            $table->integer('formal_nonsarjana_pria');
            $table->integer('formal_nonsarjana_wanita');
            $table->integer('formal_sarjana_pria');
            $table->integer('formal_sarjana_wanita');
            $table->integer('formal_pascasarjana_pria');
            $table->integer('formal_pascasarjana_wanita');
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
        Schema::drop('tenaga_pengajar');

    }
}
