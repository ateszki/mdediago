<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermedadMedico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedad_medico', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enfermedad_id')->unsigned();
            $table->integer('medico_id')->unsigned();
            $table->timestamps();
            $table->foreign('enfermedad_id')->references('id')->on('enfermedades');
            $table->foreign('medico_id')->references('id')->on('medicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enfermedad_medico');
    }
}
