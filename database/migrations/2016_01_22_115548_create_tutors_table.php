<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreTutor');
            $table->string('apellidoTutor');
            $table->string('emailTutor');
            $table->string('passwordTutor', 60);
            $table->integer('telefonoTutor');
            $table->string('estadoTutor',100);
            $table->string('ciudadTutor',100);
            $table->string('localidadTutor',100);
            $table->string('postalTutor');
            $table->string('path');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('id_especialista')->unsigned();
            $table->foreign('id_especialista')->references('id')->on('especialistas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_infante')->unsigned();
            $table->foreign('id_infante')->references('id')->on('infantes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tutors');
    }
}
