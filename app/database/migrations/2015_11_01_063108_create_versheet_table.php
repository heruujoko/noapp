<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersheetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('versheet' , function($table){
			$table->increments('id');
			$table->text('nama');
			$table->integer('total');
			$table->text('pembayaran');
			$table->text('cost_centre')->nullable();
			$table->text('budget_acc')->nullable();
			$table->text('activity_code')->nullable();
			$table->text('disetujui_oleh');
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
		Schema::drop('versheet');
	}

}
