<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultoriosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consultorios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('domicilio',512)->nullable();
			$table->string('lat')->nullable();
			$table->string('lon')->nulalble();
			$table->integer('pais_id')->unsigned()->nullable();
			$table->integer('provincia_id')->unsigned()->nullable();
			$table->integer('localidad_id')->unsigned()->nullable();
			$table->string('telefono',100)->nullable();
			$table->boolean('principal')->default(false);
			$table->boolean('habilitado')->default(true);
			$table->foreign('pais_id')->references('id')->on('paises');			
			$table->foreign('provincia_id')->references('id')->on('provincias');			
			$table->foreign('localidad_id')->references('id')->on('localidades');			
			$table->integer('medico_id')->unsigned();
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
		Schema::drop('consultorios');
	}

}
