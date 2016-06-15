<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJumlahPesantrenToProvinsiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('provinsi', function(Blueprint $table)
		{
			$table->integer('jumlah_pesantren_provinsi')->after('nama_provinsi');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('provinsi', function(Blueprint $table)
		{
			$table->dropColumn('jumlah_pesantren_provinsi');
		});
	}

}
