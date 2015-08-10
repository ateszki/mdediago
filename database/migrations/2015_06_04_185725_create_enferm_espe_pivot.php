<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermEspePivot extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enfermedades_especialidades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('enfermedad_id')->unsigned();
			$table->integer('especialidad_id')->unsigned();
			$table->timestamps();
			$table->foreign('enfermedad_id')->references('id')->on('enfermedades');
			$table->foreign('especialidad_id')->references('id')->on('especialidades');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enfermedades_especialidades');
	}

}
