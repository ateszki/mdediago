<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosMedicos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centros_medicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('centro_id')->unsigned();
			$table->integer('medico_id')->unsigned();
			$table->foreign('centro_id')->references('id')->on('centros');
			$table->foreign('medico_id')->references('id')->on('medicos');
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
		Schema::drop('centros_medicos');
	}

}
