<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFpjpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fpjp' , function($table){
			$table->increments('id');
			$table->date('tanggal_fpjp');
			$table->text('name');
			$table->text('akun');
			$table->text('trx_id');
			$table->text('uraian');
			$table->integer('jumlah');
			$table->integer('total_pengeluaran');
			$table->text('diketahui_oleh');
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
		Schema::drop('fpjp');
	}

}
