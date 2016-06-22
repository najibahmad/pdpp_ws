<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->increments('id_santri')->unique();
            $table->integer('jumlah_santri_mukim_pria');
            $table->integer('jumlah_santri_mukim_wanita');
            $table->integer('jumlah_santri_tidak_mukim_pria');
            $table->integer('jumlah_santri_tidak_mukim_wanita');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('santri');

    }
}
