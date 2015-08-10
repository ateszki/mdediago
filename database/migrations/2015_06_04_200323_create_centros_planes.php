<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosPlanes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centros_planes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('centro_id')->unsigned();
			$table->integer('plan_id')->unsigned();
			$table->foreign('centro_id')->references('id')->on('centros');
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
		Schema::drop('centros_planes');
	}

}
