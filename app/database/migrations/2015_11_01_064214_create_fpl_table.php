<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFplTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fpl' , function($table){
			$table->increments('id');
			$table->text('nama_pemohon');
			$table->date('tanggal_permintaan');
			$table->text('jenis_permintaan');
			$table->text('perbaikan_pemeliharaan')->nullable();
			$table->text('pembelian')->nullable();
			$table->text('alasan_kebutuhan');
			$table->text('spesifikasi_barang')->nullable();
			$table->integer('jumlah_estimasi_harga');
			$table->text('waktu_pengadaan');
			$table->text('trx_id')->nullable();
			$table->text('no_acc')->nullable();
			$table->integer('sisa_waktu')->nullable();
			$table->text('status')->nullable();
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
		Schema::drop('fpl');
	}

}
