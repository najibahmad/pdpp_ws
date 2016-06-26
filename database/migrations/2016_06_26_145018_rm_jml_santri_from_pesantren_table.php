<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RmJmlSantriFromPesantrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesantren', function (Blueprint $table) {
            $table->dropColumn(['jumlah_santri','jumlah_santri_mukim']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesantren', function (Blueprint $table) {
            //
        });
    }
}
