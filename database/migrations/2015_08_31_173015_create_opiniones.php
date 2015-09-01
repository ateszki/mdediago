<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpiniones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opiniones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('user_mod_id')->unsigned()->nullable();
            $table->integer('medico_id')->unsigned()->index();
            $table->integer('consultorio_id')->unsigned()->index();
            $table->integer('valoracion');
            $table->integer('atencion')->nullable();
            $table->integer('puntualidad')->nullable();
            $table->integer('instalaciones')->nullable();
            $table->integer('honorarios')->nullable();
            $table->integer('equipamiento')->nullable();
            $table->char('estado',1)->default('P'); //valores P:pendiente;A:aprobado;R:rechazado;
            $table->longText('motivo_visita')->nullable();
            $table->longText('me_gusta')->nullable();
            $table->longText('puede_mejorar')->nullable();
            $table->timestamps();
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->foreign('consultorio_id')->references('id')->on('consultorios');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_mod_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opiniones');
    }
}
