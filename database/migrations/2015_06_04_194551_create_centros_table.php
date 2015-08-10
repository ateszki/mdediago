<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('domicilio',512)->nullable();
			$table->string('lat')->nullable();
			$table->string('lon')->nulalble();
			$table->integer('pais_id')->unsigned()->nullable();
			$table->integer('provincia_id')->unsigned()->nullable();
			$table->integer('localidad_id')->unsigned()->nullable();
			$table->string('web',512)->nullable();
			$table->string('telefono',100)->nullable();
			$table->boolean('habilitado')->default(true);
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('pais_id')->references('id')->on('paises');	
			$table->foreign('user_id')->references('id')->on('users');			
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
		Schema::drop('centros');
	}

}
