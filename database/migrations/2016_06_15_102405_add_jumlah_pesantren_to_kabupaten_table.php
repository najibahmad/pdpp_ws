<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJumlahPesantrenToKabupatenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kabupaten', function(Blueprint $table)
		{
			$table->integer('jumlah_pesantren_kabupaten')->after('provinsi_id_provinsi');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kabupaten', function(Blueprint $table)
		{
			$table->dropColumn('jumlah_pesantren_kabupaten');
		});
	}

}
