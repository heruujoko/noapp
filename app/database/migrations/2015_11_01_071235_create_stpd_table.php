<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStpdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stpd' , function($table){
			$table->increments('id');
			$table->date('tanggal_stpd');
			$table->text('nama');
			$table->text('lokasi_penugasan');
			$table->date('berangkat');
			$table->integer('jumlah_hari');
			$table->text('kendaraan');
			$table->text('uraian_tugas');
			$table->integer('uhpd');
			$table->integer('jumlah_uhpd');
			$table->integer('transport_bandara');
			$table->integer('airport_tax');
			$table->integer('jumlah_total');
			$table->text('ditugaskan_oleh');
			$table->text('mengetahui');
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
		Schema::drop('stpd');
	}

}
