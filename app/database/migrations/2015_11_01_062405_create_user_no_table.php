<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_no' , function($table){
			$table->increments('id_user_no');
			$table->string('nama');
			$table->text('nik');
			$table->text('jabatan');
			$table->text('lokasi_kerja');
			$table->text('no_hp');
			$table->text('no_rekening')->nullable();
			$table->text('nama_rekening')->nullable();
			$table->text('bank_cabang')->nullable();
			$table->text('ttd');
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
		Schema::drop('user_no');
	}

}
