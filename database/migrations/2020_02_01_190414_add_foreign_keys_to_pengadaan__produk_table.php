<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPengadaanProdukTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pengadaan__produk', function(Blueprint $table)
		{
			$table->foreign('id_suplier', 'pengadaan__produk_ibfk_2')->references('id_suplier')->on('master__suplier')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pengadaan__produk', function(Blueprint $table)
		{
			$table->dropForeign('pengadaan__produk_ibfk_2');
		});
	}

}
