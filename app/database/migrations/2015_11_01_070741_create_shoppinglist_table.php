<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppinglistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shoppinglist' , function($table){
			$table->increments('id_sl');
			$table->text('kode_sl');
			$table->text('deskripsi_pekerjaan');
			$table->text('satuan');
			$table->integer('harga');
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
		Schema::drop('shoppinglist');
	}

}
