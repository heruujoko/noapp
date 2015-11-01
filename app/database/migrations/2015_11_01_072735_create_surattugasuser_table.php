<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurattugasuserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('surattugasuser' , function($table){
			$table->increments('id');
			$table->text('nama');
			$table->text('no_hp');
			$table->text('perusahaan');
			$table->integer('idsurattugas');
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
		Schema::drop('surattugasuser');
	}

}
