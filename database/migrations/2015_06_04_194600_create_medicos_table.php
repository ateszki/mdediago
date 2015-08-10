<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('titulo');
			$table->string('web',512)->nullable();
			$table->string('telefono',100)->nullable();
			$table->boolean('habilitado')->default(true);
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('medicos');
	}

}
