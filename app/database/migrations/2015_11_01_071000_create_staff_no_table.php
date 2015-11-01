<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffNoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff_no' , function($table){
			$table->increments('id_staff_no');
			$table->text('nik_staff_no');
			$table->text('nama_staff_no');
			$table->text('jabatan_staff_no');
			$table->text('no_hp_staff_no');
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
		Schema::drop('staff_no');
	}

}
