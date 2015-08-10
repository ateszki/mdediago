<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosPlanes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicos_planes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('medico_id')->unsigned();
			$table->integer('plan_id')->unsigned();
			$table->foreign('medico_id')->references('id')->on('medicos');
			$table->foreign('plan_id')->references('id')->on('planes');
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
		Schema::drop('medicos_planes');
	}

}
