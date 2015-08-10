<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('cobertura_id')->unsigned();
			$table->foreign('cobertura_id')->references('id')->on('coberturas');
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
		Schema::drop('planes');
	}

}
