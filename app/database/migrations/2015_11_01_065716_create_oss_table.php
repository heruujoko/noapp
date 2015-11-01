<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOssTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oss' , function($table){
			$table->increments('id');
			$table->text('mitra_oss');
			$table->date('tanggal_oss');
			$table->text('nama_bantek_oss')->nullable();
			$table->text('id_site');
			$table->text('nama_site');
			$table->date('tanggal_mulai_oss')->nullable();
			$table->date('tanggal_selesai_oss')->nullable();
			$table->integer('jarak_oss')->nullable();
			$table->text('permasalahan_oss');
			$table->text('action_oss');
			$table->text('rincian_jasa_material_oss');
			$table->text('kode_shopping_list');
			$table->integer('harga_oss');
			$table->text('req_oleh');
			$table->text('diketahui_oleh');
			$table->text('no_oss');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oss');
	}

}
