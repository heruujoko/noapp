<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummarywoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('summarywo' , function($table){
			$table->increments('id_summary');
			$table->text('uraian_cms');
			$table->integer('ket_cms');
			$table->integer('jumlah_cms');
			$table->integer('harga_cms');
			$table->integer('total_cms');
			$table->text('uraian_cmg');
			$table->text('ket_cmg');
			$table->integer('jumlah_cmg');
			$table->integer('harga_cmg');
			$table->integer('total_cmg');
			$table->integer('subtotal');
			$table->integer('file_id');
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
		Schema::drop('summarywo');
	}

}
