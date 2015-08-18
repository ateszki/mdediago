<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoberturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coberturas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->char('tipo',2); //OS obra social, PP Prepaga
			$table->string('domicilio',512)->nullable();
			$table->string('lat')->nullable();
			$table->string('lon')->nullalble();
			$table->integer('pais_id')->unsigned()->nullable();
			$table->integer('provincia_id')->unsigned()->nullable();
			$table->integer('localidad_id')->unsigned()->nullable();
			$table->string('web',512)->nullable();
			$table->string('telefono',100)->nullable();
			$table->boolean('habilitado')->default(true);
			$table->foreign('pais_id')->references('id')->on('paises');			
			$table->foreign('provincia_id')->references('id')->on('provincias');			
			$table->foreign('localidad_id')->references('id')->on('localidades');			
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
		Schema::drop('coberturas');
	}

}
