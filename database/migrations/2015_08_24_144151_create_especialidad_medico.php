<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadMedico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidad_medico', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("medico_id")->unsigned()->index();
            $table->foreign("medico_id")->references("id")->on("medicos")->onDelete("cascade");
            $table->integer("especialidad_id")->unsigned()->index();
            $table->foreign("especialidad_id")->references("id")->on("especialidades")->onDelete("cascade");
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
        Schema::drop('especialidad_medico');
    }
}
